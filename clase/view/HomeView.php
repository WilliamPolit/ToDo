<?php

class HomeView{
    public function __construct(){}


    public function show(){

        echo "<h1>To do</h1>";

        echo '
                <div>
                    <a href="?url=register"><button>Registrar</button></a>
                </div>
        ';
    }


}