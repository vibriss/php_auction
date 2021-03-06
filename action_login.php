<?php
require_once 'functions/utils.php';

session_start();

try {
    if (
        !empty($_POST) && 
        isset($_POST['login']) && 
        isset($_POST['password'])
    ) {
        $login_result = User::login($_POST['login'], $_POST['password']);
        $login_result->store_in_session();
    }
} catch (Exception $ex) {
}

header("location:index.php");