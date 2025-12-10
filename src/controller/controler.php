<?php
class Controler
{
    public function  index()
    {

        require "src/model/model.php";
        $model = new Model;
        $messages = $model->getData();

        require "view.php";
    }
}
