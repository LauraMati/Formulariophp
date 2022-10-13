<?php
include('../config/config.php');
include('Clientes.php');

$p = new Clientes();
$dp = mysqli_fetch_object($p->getOne($_GET['id']));

if (isset($_POST) && !empty($_POST)){
   
    $update = $p->update($_POST);
    if ($update){
      $error = '<div class="alert alert-success" role="alert">Modificado correctamente</div>';
    }else{
      $error = '<div class="alert alert-danger" role="alert" > Error al modificar </div>';
    }
  }

?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8" />
    <title>Modificar Cliente</title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php include('../menu.php')?>
    <div class="container">
    <?php
    if (isset($error)){
      echo $error;
    }
    ?>
        <h2 class="text-center nb-2"> Modificar sesión </h2>
        <form method="POST" enctype="multipart/form-data">

        <div class="row mb-2">
            <div class="col">
                <input type="text" name="Nombres" id="Nombres" placeholder="Nombres del cliente" class="form-control" value="<?= $dp->Nombres ?>" />
                <input type="hidden" name="id" value="<?= $dp->id ?>" />
            </div>
            <div class="col">
                <input type="text" name="Apellidos" id="Apellidos" placeholder="Apellidos del Cliente" class="form-control" value="<?= $dp->Apellidos ?>"/>
            </div>
            </div>

            <div class="row mb-2">
            <div class="col">
                <input type="text" name="TipoDeDocumento" id="TipoDeDocumento" placeholder="Tipo de Documento del Cliente" class="form-control" value="<?= $dp->TipoDeDocumento ?>"/>
            </div>
            <div class="col">
                <input type="number" name="NumDeDoc" id="NumDeDoc" placeholder="Numero de Documento del Cliente" class="form-control" value="<?= $dp->NumDeDoc ?>"/>
            </div>
            </div>

            <div class="row mb-2">
            <div class="col">
                <input type="number" name="Telefono" id="Telefono" placeholder="Telefono del Cliente" class="form-control" value="<?= $dp->Telefono ?>"/>
            </div>
            <div class="col">
                <input type="email" name="Correo" id="Correo" placeholder="Correo del Cliente" class="form-control" value="<?= $dp->Correo ?>"/>
            </div>
            </div>

            <div class="row mb-2">
            <div class="col">
                <input type="text" name="Ciudad" id="Ciudad" placeholder="Ciudad del Cliente" class="form-control" value="<?= $dp->Ciudad ?>"/>
            </div>
            <div class="col">
                <input type="text" name="Direccion" id="Direccion" placeholder="Dirección del Cliente" class="form-control" value="<?= $dp->Direccion ?>"/>
            </div>
            </div>

            <div class="row mb-2">
            <div class="col">
                <textarea id="Mensaje" name="Mensaje" placeholder="Mensaje del Cliente" class="form-control"> <?= $dp->Mensaje ?> </textarea>
            </div>
        </div>
        <button class="btn btn-success"> Modificar </button>
        </form>

    </div>
</body>
</html>