<?php 

namespace Model;

class Vendedor extends ActiveRecord{

    protected static $tabla = 'vendedores';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'telefono'];

    public $id;
    public $nombre;
    public $apellido;
    public $telefono;

    public function __construct($args = [])
    {
       $this->id = $args['id'] ?? null;
       $this->nombre = $args['nombre'] ?? '';
       $this->apellido = $args['apellido'] ?? '';
       $this->telefono = $args['telefono'] ?? '';
    }

    public function validar(){
        if(!$this->nombre){
            self::$errores[] = "Debes añadir un Nombre";
        }
        if(!$this->apellido){
            self::$errores[] = "Debes añadir un Apellido";
        }

        $email = "correo@correo.com";

        if(!$this->telefono){
            self::$errores[] = "Debes añadir un Telefono";
        }

        if(!preg_match('/[0-9]{10}/', $this->telefono)){
            self::$errores[] = "Formato no Valido";
        }
        return self::$errores;
    }
}