
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

    <?php require 'vendor/autoload.php';?>

  </head>
  <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Navbar</a>
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


     <?php  
           class Producto {
             public  $namep;
             public  $branchproduct;
             public  $descriptionp;
             public  $priceproduct;
             public  $stockproduct;
           
           
             function __construct($namep, $branchproduct,
             $descriptionp,$priceproduct,$stockproduct) {
               $this->namep = $namep;
               $this->branch = $branchproduct;
               $this->description = $descriptionp;
               $this->price = $priceproduct;
               $this->stock = $stockproduct;
             }
           
             function get_name() {  
               return $this->namep;
             }
             function get_branch() {
               return $this->branch;
             }
           
             function get_description() {
               return $this->description;
             }
           
             function get_price() {
               return $this->price;
             }
             function get_stock() {
               return $this->stock;
             }
           }
           
           
           $producto = new Producto ('sierra','B&D','Sierra de mano',250000,20);
           
    ?>
    <table class="table m-4 table-striped">
                <tr>
                    <th scope="col">nombre</th>
                    <th scope="col">marca</th>
                    <th scope="col">descripcion</th>
                    <th scope="col">precio</th>
                    <th scope="col">cantidad</th>
                </tr>

             
                <tr>
                <td><?php echo $producto ->get_name();?></th>
                    <td><?php echo $producto ->get_branch();?></th>
                    <td><?php echo $producto ->get_description();?></th>
                    <td><?php echo $producto ->get_price();?></th>
                    <td><?php echo $producto ->get_stock();?></th>

               </tr>
                <tr>
                  <?php 
                  $producto = new Producto ('taladro','dewalt','esto es un taladro',150000,30);
           
?>
                    <td><?php echo $producto ->get_name();?></th>
                    <td><?php echo $producto ->get_branch();?></th>
                    <td><?php echo $producto ->get_description();?></th>
                    <td><?php echo $producto ->get_price();?></th>
                    <td><?php echo $producto ->get_stock();?></th>
                </tr>    
            </table>
            
  <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>