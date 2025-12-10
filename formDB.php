<?php

require "model.php" ;
$model = new Model ; 
$messages = $model->getData();

require "view.php";
?>
