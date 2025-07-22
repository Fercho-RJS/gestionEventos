<?php 
  require_once 'Parameters.php';

  //Clase concreta.
  class Database {
    private $host; //  default: localhost
    private $database; //  name of the database.
    private $user; //  default: root
    private $password; //  default: ""
    public $connection; 

    //⁡⁣⁣⁢Este constructor es explícito⁡ porque lo creamos nosotros. Si fuere implícito, el lenguaje crea una partición de memoria para crear uno por defecto.

    public function __construct($host_name = Parameters::VALOR_DB_HOSTNAME, $db_name = Parameters::VALOR_DB_NAME, $db_user = Parameters::VALOR_USERNAME, $db_pass = Parameters::VALOR_PASSWORD){ 
      
      $this -> host = $host_name;
      $this -> database = $db_name;
      $this -> user = $db_user;
      $this -> password = $db_pass;

      //Valida un trozo de código; Throw lanza una excepción.
      try {
        $this -> connection = new PDO('mysql:host=' . $this -> host . '; dbname=' . $this -> database . '; charset=utf8mb4', $this -> user, $this -> password);
        //Php Database Object, otra forma de conectarse a la base de datos.
      } catch (PDOException $exceptionString) {
        die("¡Error! - Falló la conexión con la base de datos.");
      }
    }
  }
?>
