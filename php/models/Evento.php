<?php
require_once 'Db.php';

class Evento {

    private $id;
    private $titulo;
    private $slug;
    private $descripcion;
    private $fecha;
    private $hora;
    private $duracion;
    private $idioma;

    private $conection;

    //funcion para conectar la base de datos a la class
    public function getConection(){
        $dbObj = new DB();
        $this->conection = $dbObj->conection;
    }

    //funcion para traer toda la informacion de la base de datos de la tabla evento
    public function getEvento(){
        $this->getConection();
        $sql ="SELECT * FROM evento";
        $stmt=$this->conection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    //funcion para mostrar la informacion seleccionada por el id de un evento
    public function getEventoById($id) {
        $this->getConection();
        $sql="SELECT * FROM evento WHERE id=?";
        $stmt=$this->conection->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}