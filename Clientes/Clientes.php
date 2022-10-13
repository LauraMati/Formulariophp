<?php
include('../config/config.php');
include('../config/Database.php');

class Clientes
{
    public $conexion;

    function __construct(){
        $db= new Database(); /* LA CONEXION A LA BD SIEMPRE SE RENUEVE O ESTE EN LINEA */
        $this->conexion = $db->connectToDatabase();
    }
    function save($params){
        $Nombres = $params['Nombres'];
        $Apellidos = $params['Apellidos'];
        $TipoDeDocumento = $params['TipoDeDocumento'];
        $NumDeDoc = $params['NumDeDoc'];
        $Telefono = $params['Telefono'];
        $Correo = $params['Correo'];
        $Ciudad = $params['Ciudad'];
        $Direccion = $params['Direccion'];
        $Mensaje = $params['Mensaje'];

        $insert = " INSERT INTO client VALUES (NULL, '$Nombres', '$Apellidos', '$TipoDeDocumento', '$NumDeDoc', '$Telefono', '$Correo', '$Ciudad', '$Direccion', '$Mensaje')";
        return mysqli_query($this->conexion, $insert);       

    }

    function getAll(){
        $sql = "SELECT * FROM client";
        return mysqli_query($this->conexion, $sql);
    }

    function getOne($id)
    {
        $sql = "SELECT * FROM Client WHERE id = $id";
        return mysqli_query($this->conexion, $sql);
    }

    function update($params){
        $Nombres = $params['Nombres'];
        $Apellidos = $params['Apellidos'];
        $TipoDeDocumento = $params['TipoDeDocumento'];
        $NumDeDoc = $params['NumDeDoc'];
        $Teleono = $params['Telefono'];
        $Correo = $params['Correo'];
        $Ciudad = $params['Ciudad'];
        $Direccion = $params['Direccion'];
        $Mensaje = $params['Mensaje'];
        $id = $params['id'];

        $update = " UPDATE Client SET Nombres='$Nombres', Apellidos='$Apellidos', TipoDeDocumento='$TipoDeDocumento', NumDeDoc='$NumDeDoc', Telefono='$Teleono', Correo='$Correo', Ciudad='$Ciudad', Direccion='$Direccion', Mensaje='$Mensaje' WHERE id = $id ";
        return mysqli_query($this->conexion, $update);
    }
    
    function delete($id){
        $delete = " DELETE FROM Client WHERE id = $id";
        return mysqli_query($this->conexion, $delete);
    }
}
?>