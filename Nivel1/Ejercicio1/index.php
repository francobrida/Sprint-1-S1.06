<?php

session_start();

if (isset($_POST["username"]) && isset($_POST["number"])){
$_SESSION["username"] = $_POST["username"];
$_SESSION["number"] = $_POST["number"];
   
    echo $_SESSION["username"] . " " . $_SESSION["number"];
} 

?>