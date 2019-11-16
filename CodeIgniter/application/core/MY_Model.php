<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class MY_Model extends CI_Model{

        public $table_name ;

        function retrieving(array $patient_data){
            if(count($patient_data) > 0){
                $forError = $this->db->where($patient_data);
            }
            $forError = $this->db->get($this->table_name);
            $data     = $forError->result();
            if(!$forError){
                return $this->db->error();
            }else{
                return $data;
            }
        }
        
        public function get_user_login($email){
            $query = $this->db->get_where($this->table_name, ['email_address' => $email]);
            return $query->row_array();
        }

        function deleting(int $id){
            $forError = $this->db->delete($this->table_name,['id'=>$id]);
            if(!$forError){
                return $this->db->error();
            }else{
                return "Deleted";
            }
        }

        function updating(array $data, int $id){
            if(!empty($data) && !empty($id)){
                $forError = $this->db->update($this->table_name, $data, ['id'=>$id]);
                if(!$forError){
                    return $this->db->error();
                }else{
                    return "Updated";
                }
            }
        }

        function inserting(array $data){
            $forError = $this->db->insert($this->table_name,$data);
            if(!$forError){
                return $this->db->error();
            }else{
                return "Inserted";
            }
        }

    }