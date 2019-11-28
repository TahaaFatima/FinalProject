
<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Chatbox extends MY_Controller{
        public $doctors_chat_id ;
        function __construct()
        {
            parent::__construct();
            $this->load->model('Chat_Model');
 
        }
        function index($doc_id){
            $this->data['view'] = 'Chatbox';
            $this->data['site_title'] = 'Chat Assignment';
            $this->data['page_title'] = 'Chat -'.$this->data['site_title'];
            $this->data['doc_id']     = $doc_id;
            $this->load->view('layout', $this->data);
        }

        function insert_messages(){
            $msg = [
                    'patient_id' => $this->session->userdata('user_id'),
                    'doctors_id' => $_REQUEST['doc_id'],
                    'chats_msg'  => $_REQUEST['msg']
                ];
                $this->Chat_Model->inserting($msg);
                $this->data['view'] = 'Chatbox';
            }
            
            function get_messages( ){
                
                $offset = $_REQUEST['offset'];
                $arr = ['patient_id ' => $this->session->userdata('user_id'), 'doctors_id' => $_REQUEST['doc_id']];
                $chat_retrieved   = $this->Chat_Model->offset_retrieving($offset,100000000000,$arr); 
 
                $html   = '';

            foreach($chat_retrieved as $chat_obj){
                if($chat_obj->chats_msg != "" )
                {
                    $html .= "<li class='for_del'>".$chat_obj->chats_msg."</li>";
               }
            }
            echo $html;
        }
    }