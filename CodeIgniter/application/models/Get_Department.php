<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Get_Department extends MY_Model{
        function __construct()
        {
            parent::__construct();
            $this->table_name = "department";
        }
    }