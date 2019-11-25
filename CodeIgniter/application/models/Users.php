<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Model
{
    function __construct()
    {
        parent::__construct();
        $this->table_name = "chats";
    }
    
}
