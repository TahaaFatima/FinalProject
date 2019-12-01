<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';
    class MY_Controller extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->data['image_path'] = base_url('/assets/uploads/');
         //   var_dump($this->data['image_path']);die;
        }
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
        
        function send_mail($subject , $email_content , string $sender, $sender_name, $receiver_name, string $receiver = 'revitalize@gmail.com'){
            $mail = new PHPMailer(true);
            
            $mail->isSMTP();                          
            $mail->Host       = $this->config->item('smtp_host');   
            $mail->SMTPAuth   = $this->config->item('smtp_auth');   
            $mail->Username   = $this->config->item('smtp_user');    
            $mail->Password   = $this->config->item('smtp_pass');
            $mail->SMTPSecure = $this->config->item('smtp_crypto');
            $mail->Port       = $this->config->item('smtp_port');  

            
            $mail->setFrom($sender, $sender_name);

            $mail->addAddress($receiver, $receiver_name);     
                      
            $mail->Subject = $subject;
            
            $mail->isHTML(true);                                 
            
            $mail->Body    = $email_content;
            
            if($mail->send()){

                return 'Message has been sent';
            }
            
       }
    }