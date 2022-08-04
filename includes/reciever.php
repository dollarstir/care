<?php

require 'functions.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'login':
            extract($_POST);
            login($email, $password);
            break;

        default:

        break;
    }
}
