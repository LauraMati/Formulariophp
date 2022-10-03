<?php
include('../config/config.php');
include('../config/Database.php');

class Clientes
{
    public $conexion;

    function _construct ()
{
    $db  =new Database();
    $this->conexion = $db->connectToDatabase();
}
    function save($params){
        $Nombres = $params['Nombres'];
        $Apellidos = $params['Apellidos'];
        $TipoDeDocumento = $params['TipoDeDocumento'];
        $NumDeDoc = $params['NumDeDoc'];
        $Teleono = $params['Telefono'];
        $Correo = $params['Correo'];
        $Ciudad = $params['Ciudad'];
        $Direccion = $params['Direccion'];
        $Mensaje = $params['Mensaje'];

        $insert = " INSERT INTO Client VALUES (NULL, '$Nombres', '$Apellidos', '$TipoDeDocumento', '$NumDeDoc', '$Teleono', '$Correo', '$Ciudad', '$Direccion', '$Mensaje')";
        return mysqli_query($this->conexion, $insert);       

    }

    function getAll(){
        $sql = "SELECT * FROM client";
        return mysqli_query($this->conexion, $sql);
    }
}

?>