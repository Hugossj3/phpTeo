<?php
session_start();



function is_logged_in() {
    return isset($_SESSION['user']);
}

function require_login(){
    if(!is_logged_in()){
        header('location: index.php');
        exit();
    }
}