<?php


class LoginController{
    public function index(){
        $vlogin = new LoginView();
        $vlogin->show();
    }

}