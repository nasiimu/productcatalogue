

 <?php       
        
$query = "INSERT  INTO Regestration(Name,Age) VALUES(?,?,)";    
$stmt = mysqli_prepare($connection,$query); if (!$stmt){
   die("prepare failed:" . mysqli_error($connection));
}
mysqli_stmt_bind_param($stmt,"si" ,$Name,$Age);
$Name =$_POST["Name"];
$Image =$_POST["Age"];

function regesterNameAge($Name,$Age){
   $Name = $_POST["Name"];                
   $Age = $_POST["Age"];
   
   echo "Hello, $Name! you are $Age years old.";

}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
   require_once "dbcode.php"; 
   $Name = $_POST["Name"];
   $Age = $_POST["Age"];

   
}
?>