<?php

require 'functions.php';
require '../includes/stafffunctions.php';
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
        default:

        break;
    }
}
