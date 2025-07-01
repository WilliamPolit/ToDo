<?php


class Usuario{
    private $id;
    private $nombre;
    private $apellido;
    private $apodo;
    private $correo;
    private $contrasena;

    public function __construct($id, $nombre, $apellido, $apodo, $correo, $contrasena) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->apodo = $apodo;
        $this->correo = $correo;
        $this->contrasena = $contrasena;
    }

    public function __get($name){
        if(property_exists($this, $name)){
            return $this->$name;
        }
        return null;
    }

    public function __set($name, $value){
        if(property_exists($this, $name)){
            $this->$name = $value;
        }
    }


}