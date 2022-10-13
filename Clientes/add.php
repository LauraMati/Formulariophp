<?php
include('../config/config.php');
include('Clientes.php');

if ( isset($_POST) && !empty($_POST) ){
    $p = new Clientes();

    

    $save = $p-> save($_POST); /* UTILICE LA RECETA SAVE */
    if($save){
      $mensaje= '<div class="alert alert-success" role="alert">Usuario creado correctamente </div> ';
    }else{
      $mensaje='<div class="alert alert-danger" role="alert">Error al crear el usuario </div> ';
    }
  }

?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8" />
    <title>Reistra sesión</title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <?php include('../menu.php')?>
    <div class="container">
        <?php 
         if(isset($mensaje)){
            echo $mensaje;
         }
        ?>
        <h2 class="text-center nb-2"> Registrar sesión </h2>
        <form method="POST" enctype="multipart/form-data">

        <div class="row mb-2">
            <div class="col">
                <input type="text" name="Nombres" id="Nombres" placeholder="Nombres del cliente" class="form-control" />
            </div>
            <div class="col">
                <input type="text" name="Apellidos" id="Apellidos" placeholder="Apellidos del Cliente" class="form-control"/>
            </div>
            </div>

            <div class="row mb-2">
            <div class="col">
                <input type="text" name="TipoDeDocumento" id="TipoDeDocumento" placeholder="Tipo de Documento del Cliente" class="form-control"/>
            </div>
            <div class="col">
                <input type="number" name="NumDeDoc" id="NumDeDoc" placeholder="Numero de Documento del Cliente" class="form-control"/>
            </div>
            </div>

            <div class="row mb-2">
            <div class="col">
                <input type="number" name="Telefono" id="Telefono" placeholder="Telefono del Cliente" class="form-control"/>
            </div>
            <div class="col">
                <input type="email" name="Correo" id="Correo" placeholder="Correo del Cliente" class="form-control"/>
            </div>
            </div>

            <div class="row mb-2">
            <div class="col">
                <input type="text" name="Ciudad" id="Ciudad" placeholder="Ciudad del Cliente" class="form-control"/>
            </div>
            <div class="col">
                <input type="text" name="Direccion" id="Direccion" placeholder="Dirección del Cliente" class="form-control"/>
            </div>
            </div>

            <div class="row mb-2">
            <div class="col">
                <input type="textarea" name="Mensaje" id="Mensaje" placeholder="Mansaje del Cliente" class="form-control"/>
            </div>
        </div>
        <button class="btn btn-success"> Enviar </button>
        </form>

    </div>
</body>
</html>