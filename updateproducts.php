<!DOCTYPE html>

<html>
    <head>
       <title>UPDATE</title>
       <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <?php include 'includes/head.html';?>
        <?php include 'includes/dbcode.php';?>       


    </head>
    <body>
        <div class="container">
        <div class ="row">
            <nav  class="navbar navbar-expand-lg bg-dark custom-navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"id ="log"><img src="images/logo.png" alt ="" width="70px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item">
                        <a class="nav-link" href ="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="add-products.php">Products</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="deleteproducts.php">Delete</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="list-of-products.php">Productlist</a>
                        
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="update-product.php">Update</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    
                    

                </ul>
            </div>
            
        </nav>


        <div class="container mt-3">
                    <h2>UPDATE</h2>
                    <?php

                    //check if the Id paramater is provided in URL

                    if (isset($_GET['id']) && is_numeric($_GET['id'])){
                    $id = $_GET['id'];
                //make sure you have included the database connection code
                require_once "includes/dbcode.php";
                //fetch data from the database table 'products' for provided id
                $query = "SELECT *  FROM products where id = ? ";
                $stmt = mysqli_prepare($connection, $query);
                mysqli_stmt_bind_param($stmt, "i",$id);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $data = mysqli_fetch_assoc($result);
                //chech if the data exists for provided ID
                if($data){
                    //display the update form with pre filled data
                }

            }
                ?>
                            

            

                        

            

            <form action= "includes/processupdate.php" method="post">
                    <input type="hidden" name ="id"  value="<?php echo $data['id'];?>">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="ProductName" placeholder="name" value="<?php echo $data['ProductName'];?>">
                    </div>

                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="text" class="form-control" name="ProductImage" placeholder="image" value="<?php echo $data['ProductImage'];?>">
                    </div>
                    <div class="form-group">
                        <label for="Price">Price:</label>
                        <input type="text" class="form-control" name="ProductPrice" placeholder="price" value="<?php echo $data['ProductPrice'];?>">
                    </div>

                    <div class="form-group">
                        <label for="message">Description:</label>
                        <textarea class="form-control" name="ProductDescription" rows="4" placeholder="description" value="<?php echo $data['ProductDescription'];?>"></textarea>
                    </div>
                
                    <button type="submit" class="btn btn-success">update</button>
            </form>
            
        </div>

     </body>
</html>








    
