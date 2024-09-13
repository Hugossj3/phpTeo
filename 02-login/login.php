<?php
session_start();
header("Content-Type: application/json");

$validUsuario = "Juanito";
$validPassword = "contraseña";



$username = $_POST["username"] ?? "";//es equivalente a un isset
$password = $_POST["password"] ?? "";


if ($username == $validUsuario && $password == $validPassword) {
    $_SESSION["user"] = $username;  
    echo json_encode(["success" => true]);
    
} else {
    echo json_encode(["success" => false]);
}

