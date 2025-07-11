<?php


class ToDoController{

    public function index(){
        $vtodo = new ToDoView();
        $vtodo->show();
    }
}