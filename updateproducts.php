<!DOCTYPE html>

<html>
    <head>
       <title>UPDATE</title>
      
        <?php include 'includes/head.html';?>
        <?php include 'includes/dbcode.php';?>       


    </head>
    <body>
        <div class="container">
        <?php include 'includes/nav.php';?>
        <div class ="row">

            


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
             <span>&copy; 2023<h3 CLASS = text-white>Product of africa</h3></span>
            <div class ="row">
              <div class ="col-lg-3">
                <p>whatsapp</p>
                <p>contacts</p>
                <p>E-mail</p>
                <p>call Now</p>
              </div>
              <div class ="col-lg-6">
                <h3>Contact us</h3>
                <p>located in florida USA</p>
                <P>+17654323222</P>
                <P>www.proofafricaus.com</P>
              </div>

              <div class ="col-lg-3">
                <ul>
                  <li>find us</li>
                  <li>instagram</li>
                  <li>twiter</li>
                  <li>facebook</li>
                  <li>youtube</li>
                </ul>
              </div>
            </div>

            
        </div>

     </body>
</html>








    
