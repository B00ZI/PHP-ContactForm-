<?php

session_start();
$nameError =  null;
$emailError =  null;
$messageError = null;
$oldName =  null;
$oldEmail =  null;
$oldMessage = null;
if (isset($_SESSION["error"])) {
    $nameError = $_SESSION["error"]["name"];
    $emailError = $_SESSION["error"]["email"];
    $messageError = $_SESSION["error"]["message"];
    $oldName = $_SESSION["oldInput"][0];
    $oldEmail = $_SESSION["oldInput"][1];
    $oldMessage = $_SESSION["oldInput"][2];
}

if(isset($_SESSION["succes"])){
require "succesPage.php" ; 

}else{
require "contactHeader.php";
require "contactBody.php";
}



session_unset();
?>