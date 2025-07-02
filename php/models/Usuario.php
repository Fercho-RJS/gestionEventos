<?php
require_once 'Db.php';

class Usuario {

    private $id;
    private $nombre;
    private $apellido;
    private $dni;
    private $direccion;
    private $telefono;
    private $email;
    private $password;

    private $conection;

    //funcion para conectar la base de datos a la class
    public function getConection(){
        $dbObj = new DB();
        $this->conection = $dbObj->conection;
    }

    //funcion para traer toda la informacion de la base de datos de la tabla usuario
    public function getUsuario(){
        $this->getConection();
        $sql ="SELECT * FROM usuario";
        $stmt=$this->conection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    //funcion para mostrar la informacion seleccionada por el id de un usuario
    public function getUsuarioById($id) {
        $this->getConection();
        $sql="SELECT * FROM usuario WHERE id=?";
        $stmt=$this->conection->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}