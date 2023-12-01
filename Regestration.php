
<html>
   
  <head>
       <title>REGESTRATION</title>
       
        <?php include 'includes/head.html';?>
         <?php include 'includes/dbcode.php';?>    
        
  </head>
  <?php
if($fname =="" || empty($lname)){
    header('insert data.php?message=you need to fill in the first form!');
}
    else{
        $query = "insert into 'regestration'('FirstName','LastName','Age')('$fname','$lname','$age')";
        $results = mysqli_query($connection,$query);

        if(!$result){
            die("query failed"); 
        }

        else{
            header('location:about.php?inser_msg=you data has been added successfully');

        }
        
    }
    


?>
<?php
if(isset($_GET['message'])){
    echo "<h5>" . $_GET['message'] . "</h5>";
}
if(isset($_GET['insert_msg'])){
    echo "<h5>" . $_GET['message'] . "</h5>";
}



?>       




    <body> 
         <?php include 'includes/nav.php';?>

         
        <div class="container mt-5">
    
            <h2>Regestration</h2>
            <form action= "Regestration.php" method="post">
                <div class="form-group">
                    <label for="FirstName"><b>FirstName:</b></label>
                    <input type="text" class="form-control" name="FirstName" placeholder="name">
                </div>

                <div class="form-group">
                    <label for="SecondName">LastName:</label>
                    <input type="text" class="form-control" name="SecondName" placeholder="SecondName">
                </div>
                <div class="form-group">
                    <label for="Age">Age:</label>
                    <input type="text" class="form-control" name="Age" placeholder="Age">
                </div>

                <button type="submit" name = "create" class="btn btn-primary">Regester</button>
            </form>
      </div>
  </body>
</html>



