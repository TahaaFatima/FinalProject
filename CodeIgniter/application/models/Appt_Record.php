<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Appt_Record extends MY_Model{
        function __construct()
        {
            parent::__construct();
            $this->table_name = "doctor_rating";
        }
    }