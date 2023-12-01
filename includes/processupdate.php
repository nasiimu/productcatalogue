<?PHP
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once "dbcode.php"; 
    $id = $_POST["id"];
    $Name = $_POST["ProductName"];
    $Image = $_POST["ProductImage"];
    $Price = $_POST["ProductPrice"];
    $Description = $_POST["ProductDescription"];

    $query = "UPDATE products SET ProductName = ?, ProductImage = ?, ProductPrice = ?, ProductDescription = ? WHERE id = ?";
    $stmt = mysqli_prepare($connection,$query);
    mysqli_stmt_bind_param($stmt,"ssssi",$Name,$Image,$Price,$Description,$id);

    
    mysqli_stmt_execute($stmt);
    echo "update was  succesful";
    Header("Location: ../list-of-products.php");
    exit();


}

?>