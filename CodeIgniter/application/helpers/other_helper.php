<?php

    function arrangeDate($date_appt){
        list($day,$month,$year) = explode("/",$date_appt);
        return implode("-",[$year,$month,$day]);
    }