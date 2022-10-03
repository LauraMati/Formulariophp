<?php
include_once('../config/config.php');
include('Clientes.php');

$p = new Clientes();
$data = $p->getAll();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h2 class="text-center mb-2"> Lista</h2>
    <div class="row">
        <?php
        while( $pt = mysqli_fetch_object($data)){
            echo"<div class='col'>";
              echo" <div>";
                echo"<h5> <img src='".ROOT."/Images/$pt->imagen' width='50' height='50' /> $pt->Nombres $pt->Apellidos </h5>";
             echo "</div>";
           echo "</div>";    

        }
    </div>
    </div>
    
</body>
</html>