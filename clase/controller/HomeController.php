<?php

class HomeController{

    public function index(){
        $vhome = new HomeView();
        $vhome->show();
    }

}