
<?php
require_once "includes/dbcode.php";
$query = "SELECT * FROM products";
$results = mysqli_query($connection,$query);
if(!$results){
    die("query-failed" .'msqli_error'());
}

  while($row = mysqli_fetch_assoc($results)){
  echo "<h2>"  . $row['id']  . "</h2>";
   echo "<h2>"  . $row['name']  . "</h2>"; 
   echo "<h2>"  . $row['image']  . "</h2>";
   echo "<h2>"  . $row['Price']  . "</h2>"; 
   echo "<h2>"  . $row['description']  . "</h2>";



  }


?> 