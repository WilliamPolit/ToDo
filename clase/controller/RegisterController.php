<?php


class RegisterController{

    public function index(){
        $vRegister = new RegisterView();
        $vRegister->show();
    }

    public function register(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
        }
    }
}