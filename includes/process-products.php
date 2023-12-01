<?php

    require_once "dbcode.php";
    
    $query = "INSERT  INTO products(ProductName,ProductImage,ProductPrice,ProductDescription) VALUES(?,?,?,?)";
    $stmt = mysqli_prepare($connection,$query);
    if (!$stmt){
        die("prepare failed:" . mysqli_error($connection));
    }
    mysqli_stmt_bind_param($stmt,"ssss" ,$Name,$Image,$Price,$Description);
    $Name =$_POST["ProductName"];
    $Image =$_POST["ProductImage"];
    $Price =$_POST["ProductPrice"];
    $Description =$_POST["ProductDescription"];
    if(mysqli_stmt_execute($stmt)){
        echo "data inserted sucessfully";
    }
    mysqli_close($connection);
?>