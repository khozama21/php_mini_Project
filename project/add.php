<?php
session_start();
// unset($_SESSION['name']);
// unset($_SESSION['price']);
// unset($_SESSION['des']);
 
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        >
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
        <!-- css -->
        <link rel="stylesheet" href="add.css">
    </head>
    <body>
        <nav>
            <div class="menu-icon">
                <i class="fa fa-bars fa-2x"></i>
            </div>
            <div class="logo">
                l'esth??tique
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li class="active">
                        <a href="products.php">Products</a>
                    </li>
                    <li>
                        <a href="#cu">Contact Us</a>
                    </li>
                    <li>
                        <a href="add.php">Add Products</a>
                    </li>
                   
                </ul>
            </div>
        </nav>
        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                    <h3> ADD PRODUCTS</h3>
                    <div class="card">
                        <form class="form-card" method="post" action="add.php">
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label class="form-control-label px-3">Products Name</label>
                                    <input type="text" name="name">
                                </div>
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label class="form-control-label px-3"> Description</label>
                                    <input type="text" name="Description">
                                </div>
                            </div>
                            <div class="row justify-content-between text-left">
                                <div class="form-group col-sm-6 flex-column d-flex">
                                    <label class="form-control-label px-3">Price</label>
                                    <input type="number" name="price">
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="form-group col-sm-6">
                                    <button type="submit" class="btn btn-block btn-primary" name="add">ADD PRODUCT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <table class="table table-bordered">
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                </tr>



                <?php
        
                if(isset($_POST['add'])) {
 
                    $_SESSION ['name'] .= $_POST['name']."<br>";
                    $_SESSION ['price'] .= $_POST['price']."<br>";
                    $_SESSION['des'] .=$_POST['Description']."<br>";
        
                    if(!empty($_POST['name']) && !empty($_POST['price'])){
                        $arr1 = explode("<br>",$_SESSION ['name']) ;
                        $arr2 = explode("<br>",$_SESSION ['price']) ;
                  
                        for($i = 0 ; $i<count($arr1)-1 ; $i++){
                              echo "
                        <tr>
                            <td>" . $arr1 [$i] ."</td>
                            <td> ".$arr2[$i] ."</td>
                            <td>
                            
                        </tr>
                          ";
                        }
                  
                      } 
                  
                      }
                ?> 
            </table>
        </div>


       
    </body>
</html>
