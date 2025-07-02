<?php 
require_once 'Db.php';

class Disertante {

    private $id;
    private $nombre;
    private $apellido;
    private $biografia;
    private $telefono;
    private $url;
    private $email;
    private $twiter;
    private $linkedin;

    private $conection;

    //funcion para conectar la base de datos a la class
    public function getConection(){
        $dbObj = new DB();
        $this->conection = $dbObj->conection;
    }

    //funcion para traer toda la informacion de la base de datos de la tabla disertante
    public function getDisertante(){
        $this->getConection();
        $sql ="SELECT * FROM disertante";
        $stmt=$this->conection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    //funcion para mostrar la informacion seleccionada por el id de un usuario
    public function getDisertanteById($id) {
        $this->getConection();
        $sql="SELECT * FROM disertante WHERE id=?";
        $stmt=$this->conection->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}