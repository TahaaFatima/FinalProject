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
            $data['view'] = 'Chatbox';
            $data['site_title'] = 'Chat Assignment';
            $data['page_title'] = 'Chat -'.$data['site_title'];
            $data['doc_id']     = $doc_id;
            $this->load->view('layout', $data);
        }

        function insert_messages(){
            $msg = [
                    'patient_id' => $this->session->userdata('user_id'),
                    'doctors_id' => $_REQUEST['doc_id'],
                    'chats_msg'  => $_REQUEST['msg']
                ];
                $this->Chat_Model->inserting($msg);
                $data['view'] = 'Chatbox';
              //  $this->load->view('layout', $data);
            }
            
            function get_messages( ){
                
                $offset = $_REQUEST['offset'];
                $arr = ['patient_id ' => $this->session->userdata('user_id'), 'doctors_id' => $_REQUEST['doc_id']];
                $data   = $this->Chat_Model->offset_retrieving($offset,5,$arr); 

               // var_dump($this->db->last_query());die;
                $html   = '';

            foreach($data as $chat_obj){
                $html .= "<li class='for_del'>".$chat_obj->chats_msg."</li>";
            }
            echo $html;
        }
    }