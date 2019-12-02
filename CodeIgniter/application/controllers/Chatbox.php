    
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Chatbox extends MY_Controller{
        public $doctors_chat_id ;
        function __construct()
        {   
            parent::__construct();
            $login_in = $this->session->userdata('user_id');
            if(!isset($login_in) || empty($login_in)){
                redirect('login');
            }
            $this->load->model('chat_model');
        }
        function index($user_id = "" ){

            if($this->session->userdata('role_id') == 1){
                $patients_id  = $user_id;
                $where = ['patient_id' => $patients_id];
                $this->load->model('patient_registration_model');
                $pat_info = $this->patient_registration_model->retrieving($where, false);
                $this->data['patients_details']     =   $pat_info;
            } else if($this->session->userdata('role_id') == 2){
                $this->load->model('doctor_registration_model');
                $doctors_id  = $user_id;
                $where = ['doctors_registration.doctors_id' => $doctors_id];
                $join_retrieve[] = [
                                'table_name'=>'price',
                                'column_with'=>'doctors_registration.price_id = price.price_id'
                                ];
                $join_retrieve[] = [
                                'table_name'=>'department',
                                'column_with'=>'doctors_registration.department_id = department.department_id'
                                ];
                $join_retrieve[] = [
                                'table_name'=>'area',
                                'column_with'=>'doctors_registration.area_id = area.area_id'
                                ];
                $join_retrieve[] = [
                                'table_name'=>'clinic',
                                'column_with'=>'doctors_registration.clinic_id = clinic.clinic_id'
                                ];
                $doc_info = $this->doctor_registration_model->search_join($where,$join_retrieve);
                $this->data['doctors_details']      =   $doc_info;
            }
            $this->data['view']                 = 'chatbox';
            $this->data['site_title']           =   'Revitalize';
            $this->data['page_title']           =   'Chat - '.$this->data['site_title'];
            $this->data['user_id']              =   $user_id;
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
                    
                $this->chat_model->inserting($arr);
                $this->data['view'] = 'chatbox';
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

                $chat_retrieved   = $this->chat_model->offset_retrieving($offset,100000000000,$arr); 
 
                $html   = '';

            foreach($chat_retrieved as $chat_obj){
                if($chat_obj->chats_msg != "" )
                {   

                    if($this->session->userdata('role_id') == 1){
                        if($chat_obj->is_sender_doctor){
                            $html .= "<li class='for_del sender'>".$chat_obj->chats_msg."</li>";
                            
                        }else{
                            $html .= "<li class='for_del' receiver>".$chat_obj->chats_msg."</li>";

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