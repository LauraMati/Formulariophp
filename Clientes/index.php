<?php
include_once('../config/config.php');
include('Clientes.php');

$p = new Clientes();
$data = $p->getAll();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $remove = $p->delete($_GET['id']);
    if ($remove){
        header('Location: '.ROOT.'/Clientes/index.php');
    }else{
        $mensaje = '<div class="alert alert-danger" role="alert">Error al eliminar </div>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php include('../menu.php');?>
    <div class="container">
    <h2 class="text-center mb-2"> Lista</h2>
    <div class="row">
        <?php
        while( $pt = mysqli_fetch_object($data)){
            echo "<div class='col-6'>";
                echo "<div class='border border-info p-2'>";
                echo"<h5>Nombres:  $pt->Nombres $pt->Apellidos </h5>";
                echo"<h5> Telefono: $pt->Telefono  </h5>";
                echo"<h5> Correo: $pt->Correo  </h5>";
                echo "<div class='text-center'>";
                echo "<a class='btn btn-success' href='".ROOT."/Clientes/edit.php? id=$pt->id'> Modificar </a> - <a class='btn btn-danger' href='".ROOT."/Clientes/index.php?id=$pt->id' >Eliminar </a>";

             echo "</div>";
           echo "</div>";    
           echo "</div>";    

        }
        ?>
    </div>
    </div>
    
</body>
</html>