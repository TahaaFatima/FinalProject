<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class userchat extends MY_Model
{
    function add_message($message, $nickname, $guid)
    {
        $data = array(
            'message'    => (string) $message,
            'name'       => (string) $name,
            'created_at' => time(),
        );
          
        $this->db->insert('chats', $data);
    }

    function get_messages($timestamp)
    {
        $this->db->where('timestamp >', $timestamp);
        $this->db->order_by('timestamp', 'DESC');
        $this->db->limit(10); 
        $query = $this->db->get('chats');
        
        return array_reverse($query->result_array());
    }

    
}
