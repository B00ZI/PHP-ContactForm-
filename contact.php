<?php

session_start();


$nameError = $_SESSION["error"]["name"] ?? null;
$emailError = $_SESSION["error"]["email"] ?? null;
$messageError = $_SESSION["error"]["message"] ?? null;
$oldName = $_SESSION["oldInput"][0] ?? null;
$oldEmail = $_SESSION["oldInput"][1] ?? null;
$oldMessage = $_SESSION["oldInput"][2] ?? null;


if (isset($_SESSION["succes"])) {
    require "succesPage.php";
} else {
    require "contactHeader.php";
    require "contactBody.php";
}



session_unset();
