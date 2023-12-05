<?php
               
               require_once "includes/dbcode.php";
    
               $query = "INSERT  INTO profile(Name,Tell,Avatar) VALUES(?,?,?)";
               $stmt = mysqli_prepare($connection,$query);
               if (!$stmt){
                   die("prepare failed:" . mysqli_error($connection));
               }
               //use files get contents toread the image file
               $Avatarpath = $_FILES["Avatar"]["tmp_name"];
               $Avatardata = file_get_contents($Avatarpath);
                //bid parameters
                mysqli_stmt_bind_param($stmt,"sss",$Name,$Tell,$Avatardata);
                //get other data
                $Name = $_POST["Name"]; 
                $Tell = $_POST["Tell"];

               
               
               if(mysqli_stmt_execute($stmt)){
                   echo "data inserted sucessfully";
               }
               mysqli_close($connection);
 
    ?>

