<!-- Check if the form was submitted (isset($_POST['submit'])).

Retrieve and Sanitize the data immediately (using filter_input_array is often best).

Validate the sanitized data for correctness, collecting any errors.

If no errors: Process the data (save to a database, send an email, etc.) 
and redirect the user (Post/Redirect/Get pattern).

If errors exist: Reload the form page,
displaying the collected errors and ideally 
repopulating the valid fields the user entered. -->


<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location:contact.php");
}


$name =  $_POST["name"];
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$message = $_POST["message"];

$validName = null;
$validEmile = null;
$validMessage = null;
$error = [];


if (empty($name)) {
    $error["name"]= "plese enter a  name";
} else {
    $validName = htmlspecialchars($name);
}


if (empty($email)) {
    $error["email"]= "plese enter a  email";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error["email"]= "plese enter a valide  email";
} else {
    $validEmile = $email;
}


if (empty($message)) {
    $error["message"]= "plese enter a  message";
} else {
    $validMessage = htmlspecialchars($message);
}


if ($validName && $validEmile && $validMessage) {
    echo $validName;
    echo $validEmile;
    echo $validMessage;
} else {
    foreach($error as $err){
        echo $err . " <br>" ;
    }
}



?>