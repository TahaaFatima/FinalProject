<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class MY_Controller extends CI_Controller{

        public function do_upload( &$error )
        {
                $config['upload_path']          = './assets/uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {   
                    $error = true;
                    return $this->upload->display_errors();

                }
                else
                { 
                        $error = false;
                      return   $this->upload->data() ;

                      
                }
        }
    }