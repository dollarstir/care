<?php

require 'functions.php';
require 'stafffunctions.php';
require 'adminfunction.php';
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'login':
            extract($_POST);
            login($email, $password);
            break;

        case 'register':
            extract($_POST);
            register($fname, $lname, $email, $phone, $dob, $password, $repass);
            break;
        case 'forgotpass':
            extract($_POST);
            forgotpass($email);
            break;

        case 'support':
            extract($_POST);
            support($staffid, $message);
            break;

        case 'adminlogin':
            extract($_POST);
            adminlogin($email, $password);
            break;
        case 'addstaff':
            extract($_POST);
            addstaff($name, $email, $phone, $dob, $password, $repass);
            break;
        case 'addresidence':
            extract($_POST);
            $time = $from.' - '.$to;
            addresidence($name, $address, $map, $dob, $gender, $medcondition, $period, $time);
            break;
        default:

        break;
    }
}
