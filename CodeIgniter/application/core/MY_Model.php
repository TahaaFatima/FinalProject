<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class MY_Model extends CI_Model{

        public $table_name ;

        public function retrieving(array $whereCondition=[], bool $multiple = true, bool $is_arr = false ){
            if(count($whereCondition) > 0){
                $forError = $this->db->where($whereCondition);
            }
            $forError = $this->db->get($this->table_name);
            if($multiple){
                if($is_arr){
                    $data     = $forError->result_array();
                }else{
                    $data     = $forError->result();
                }  
            }
            else{
                if($is_arr){
                    $data     = $forError->row_array();
                }else{
                    $data     = $forError->row();
                } 
            }
            if(!$forError){
                return $this->db->error();
            }else{
                return $data;
            }
        }
        
        public function get_doctors_info($id){
            $query = $this->db->get_where($this->table_name, ['doctors_id' => $id]);
            return $query->row_array();
        }

        public function get_user_login($email){
            $query = $this->db->get_where($this->table_name, ['email_address' => $email]);
            return $query->row_array();
        }

        public function deleting(int $id){
            $forError = $this->db->delete($this->table_name,['id'=>$id]);
            if(!$forError){
                return $this->db->error();
            }else{
                return "Deleted";
            }
        }
        public function updating(array $data ,  array $where){
            if(!empty($data) && !empty($where)){
                $forError = $this->db->update($this->table_name, $data, $where);
                if(!$forError){
                    return $this->db->error();
                }else{
                    return true;
                }
            }
        }

        public function inserting(array $data)
        { 
           $forError = $this->db->insert($this->table_name,$data);
            if(!$forError){
                return $this->db->error();
            }else{
                return $this->db->insert_id();
            }
        }

        public function search_join(array $where=[], array $join_retrieve, $select = '*'){              
            $this->db->select($select);
            $this->db->from($this->table_name);
            foreach($join_retrieve as $retrieved){
                $this->db->join($retrieved['table_name'],$retrieved['column_with']);
            }
            if(count($where) > 0){
                $this->db->where($where);
            }
            return $this->db->get()->result();
        }
        public function offset_retrieving($offset= 0 ,$limit = 100000000000,$arr){
            
            return $this->db->where($arr)->limit($limit,$offset)->get('chats')->result();
        }
        public function retrieve_ratings($select = '*', array $where = [], $multiple = false){
            $this->db->select($select);
            $this->db->from($this->table_name);
            if(count($where) > 0){
                $this->db->where($where);
            }
            if($multiple){
                return $this->db->get()->result();
            }
            return $this->db->get()->row_array();
        }
    }