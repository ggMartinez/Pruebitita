<?php 
    require "dbConfig.php";

    class ConexionDB {
        private $Ip;
        private $NombreDB;
        private $NombreUsuario;
        private $Password;
        private $Puerto;

        public function conectar(){
            $this -> Ip = IP;
            $this -> NombreDB = DB;
            $this -> NombreUsuario = NOMBRE_USUARIO;
            $this -> Password = PASSWORD;
            $this -> Puerto = PORT;



            mysql_connect();

            mysql_connect_close();

        }
    }
