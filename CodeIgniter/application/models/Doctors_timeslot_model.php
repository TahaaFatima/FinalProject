<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Doctors_timeslot_model extends MY_Model{
        function __construct()
        {
            parent::__construct();
            $this->table_name = "dr_time_slot";
        }
    }