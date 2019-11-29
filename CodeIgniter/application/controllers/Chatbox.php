
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Chatbox extends MY_Controller{
        public $doctors_chat_id ;
        function __construct()
        {   
            parent::__construct();
            $login_in = $this->session->userdata('user_id');
            if(!isset($login_in) || empty($login_in)){
                redirect('Login');
            }
            $this->load->model('Chat_Model');
        }
        function index($user_id = "" ){
            $this->data['view']         = 'Chatbox';
            $this->data['site_title']   = 'Revitalize';
            $this->data['page_title']   = 'Chat - '.$this->data['site_title'];
            $this->data['user_id']       = $user_id;
             $this->load->view('layout', $this->data);
        }

        function insert_messages(){
            if($this->session->userdata('role_id') == 1){
                $arr = [
                    'patient_id ' => $_REQUEST['user_id'], 
                    'doctors_id' => $this->session->userdata('user_id'),
                    'is_sender_doctor' => 1
                ];
            }
            if($this->session->userdata('role_id') == 2){
                $arr = [
                    'patient_id ' => $this->session->userdata('user_id'), 
                    'doctors_id' => $_REQUEST['user_id'],
                    'is_sender_patient' => 1
                ];
            }
            $arr['chats_msg'] =  $_REQUEST['msg'];
                    
                $this->Chat_Model->inserting($arr);
                $this->data['view'] = 'Chatbox';
            }
            
            function get_messages( ){
                
                $offset = $_REQUEST['offset'];
                if($this->session->userdata('role_id') == 1){
                    $arr = [
                        'patient_id ' => $_REQUEST['user_id'], 
                        'doctors_id' => $this->session->userdata('user_id')
                    ];
                }
                if($this->session->userdata('role_id') == 2){
                    $arr = [
                        'patient_id ' => $this->session->userdata('user_id'), 
                        'doctors_id' => $_REQUEST['user_id']
                    ];
                }

                $chat_retrieved   = $this->Chat_Model->offset_retrieving($offset,100000000000,$arr); 
 
                $html   = '';

            foreach($chat_retrieved as $chat_obj){
           //     var_dump($chat_obj);die;
                if($chat_obj->chats_msg != "" )
                {   

                    if($this->session->userdata('role_id') == 1){
                        if($chat_obj->is_sender_doctor){
                            $html .= "<li class='for_del sender'>".$chat_obj->chats_msg."</li>";
                            
                        }else{
                            $html .= "<li class='for_del'>".$chat_obj->chats_msg."</li>";

                        }
                    }else if($this->session->userdata('role_id') == 2){
                        if($chat_obj->is_sender_patient){
                            $html .= "<li class='for_del sender'>".$chat_obj->chats_msg."</li>";
                            
                        }else{
                            $html .= "<li class='for_del receiver'>".$chat_obj->chats_msg."</li>";

                        }

                    }
               }
            }
            echo $html;
        }
    }