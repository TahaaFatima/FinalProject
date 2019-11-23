<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Doctor_Timeslot_Model extends MY_Model{
        function __construct()
        {
            parent::__construct();
            $this->table_name = "dr_time_slot";
        }
    }