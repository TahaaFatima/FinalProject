<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
//    require 'vendor/autoload.php';
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
        
        function send_mail($subject , $email_content , string $receiver, string $sender_email = 'revitalize@gmail.com'){

            // Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);
            
            $mail->isSMTP();                          
            $mail->Host       = $this->config->item('smtp_host');   
            $mail->SMTPAuth   = $this->config->item('smtp_auth');   
            $mail->Username   = $this->config->item('smtp_user');    
            $mail->Password   = $this->config->item('smtp_pass');
            $mail->SMTPSecure = $this->config->item('smtp_crypto');
            $mail->Port       = $this->config->item('smtp_port');  

            //Recipients
            $mail->setFrom($sender_email, 'Mailer');

            $mail->addAddress($receiver, 'Joe User');     
                      
            $mail->Subject = $subject;
            
            $mail->isHTML(true);                                 
            
            $mail->Body    = $email_content;
            
            if($mail->send()){

                echo 'Message has been sent';
            }else{
                echo 'Message has not been sent';
                echo 'Mail error:' . $mail->ErrorInfo;
            }
            
       }
    }