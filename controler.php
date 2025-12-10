<?php
class Controler
{
    public function  index()
    {

        require "model.php";
        $model = new Model;
        $messages = $model->getData();

        require "view.php";
    }
}
