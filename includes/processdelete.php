
<?php include 'includes/dbcode.php';?>
<?php
//check if the Id paramater is provided in URL

if (isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
    //make sure you have included the database connection code
    require_once "dbcode.php";
       
    $query = "DELETE   FROM products WHERE id = ? ";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, 'i',$id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($connection);
    
    
    Header("Location: ../list-of-products.php");
    exit();

    }
    ?>
