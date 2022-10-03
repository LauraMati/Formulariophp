<?php
class Database
{
    public $host = 'localhost'; // Servidor
    public $user = 'root'; // Usuario de phpMyadmin
    public $pass = ''; //contraseña de phpMyadmin
    public $db = 'Client'; //base de datos
    public $conexion;

    function connectToDatabase(){
        $this->conexion = mysqli_connect( $this->host, $this->user, $this->pass, $this->db );

        if (mysqli_connect_error() ){
            echo'Error de Conexion'. mysqli_connect_error();
        }

        return $this->conexion;
    }
}