<?php

    function arrangeDate($date_appt){
        list($month,$day,$year) = explode("/",$date_appt);
        return implode("-",[$year,$month,$day]);
    }