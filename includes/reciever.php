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
            register($name, $email, $phone, $dob, $password, $repass);
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

        case 'approverequest':
            extract($_POST);
            approverequest($id);
            break;

        case 'completetask':
            extract($_POST);
            completetask($id, $residenceid, $staffreport, $residencecomment);
            break;
        case 'replymessage':
            extract($_POST);
            replymessage($id, $reply);
            break;

        case 'deletemessage':
            extract($_POST);
            deletemessage($id);
            break;

        case 'makerequest':
            extract($_POST);
            makerequest($id);
            break;
        default:

        break;
    }
}
