<?php require 'vendor/autoload.php';?>
<?php require 'config/database.php';

// NUEVA INSTANCIA DE LA CLASE DATABASE
$db = new Database();
// ASIGNAMOS A $con LOS VALORES DE LA CLASE Y LA FUNCION DE CONEXION A LA BD YA CREADAS
$con = $db->conectar();
// DEFINIMOS UNA VARIABLE PARA GUARDAR LA CONSULTA SQL
$sql = $con->prepare("SELECT * FROM usuario");
// EJECUTAMOS LA CONSULTA DE LA VARIABLE $sql
$sql->execute();

$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);


?>
<?php require 'src/clase-producto.php';?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<!-- CODIGO PHP PARA CONECTAR A LA FUNCION "require" EN PHP-->

    
    

  </head>
  <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <a class="navbar-brand ms-4" href="#">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

<!-- TABLA PARA IMPRIMIR PRODUCTOS -->
     
    <table class="table  table-hover m-4 table-striped">
                <tr>
                   <td class="col">id</td>
                   <td class="col">documento</td>
                   <td class="col">nombre</td>
                   <td class="col">apellido</td>
                   <td class="col">correo</td>
                   <td class="col">telefono</td>
                   <td class="col">rol</td>
                   <td class="col">contraseña</td>
                </tr>
<?php 
$db = new Database();
// ASIGNAMOS A $con LOS VALORES DE LA CLASE Y LA FUNCION DE CONEXION A LA BD YA CREADAS
$con = $db->conectar();
// DEFINIMOS UNA VARIABLE PARA GUARDAR LA CONSULTA SQL
$sql = $con->prepare("SELECT * FROM usuario");
// EJECUTAMOS LA CONSULTA DE LA VARIABLE $sql
$sql->execute();
// GUARDAMOS EL RESULTADO EN UNA NUEVA VARIABLE Y DEFINIMOS EL BUCLE CON 'foreach'
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC); foreach ($resultado as $row) {

?>
                <tr>
                  <td class="col"><?php echo $row ['id_usuario']; ?></td>
                  <td class="col"><?php echo $row ['documento_usuario']; ?></td>
                  <td class="col"><?php echo $row ['nombre_usuario']; ?></td>
                  <td class="col"><?php echo $row ['apellido_usuario']; ?></td>
                  <td class="col"><?php echo $row ['correo_usuario']; ?></td>
                  <td class="col"><?php echo $row ['telefono_usuario']; ?></td>
                  <td class="col"><?php echo $row ['rol']; ?></td>
                  <td class="col"><?php echo $row ['contraseña']; ?></td>
                </tr>
<?php  } ?>
            </table>
            
  <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>
