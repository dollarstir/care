<?php

require 'functions.php';

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
        default:

        break;
    }
}
