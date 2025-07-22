<?php
  //Una ⁡⁣⁣⁢clase abstracta⁡ no tiene instancias de esa clase, en una clase concreta SI tenemos que crear las instancias (la instancia es cuando creo un objeto de esa clase). ⁡⁢⁢⁢Una clase abstracta nunca va a tener objetos⁡ (o se va a instanciar).

  //Clase abstracta.
  class Parameters {
    const VALOR_DB_HOSTNAME = 'localhost';
    const VALOR_DB_NAME = 'eventos';
    const VALOR_USERNAME = 'root';
    const VALOR_PASSWORD = '';
  }

  //⁡⁢⁢⁢Ésto sirve para centralizar los datos de forma segura⁡; puedo poner otras constantes que tengan que ver con otras cosas. Podemos por ejemplo colocar una secretKey para encriptar valores (Hash). ¿Para qué usamos esto?
?>