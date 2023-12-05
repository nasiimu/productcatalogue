<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>profilelist</title>

    </head>
    <body>
        <div class = "container">
            <table>
                <thead>
                    <tr>
                        <th scope = "col">id</th>
                        <th scope = "col">Name</th>
                        <th scope = "col">Tell</th>
                        <th scope = "col">Avatar</th>

                        
                    </tr>
                </thead>
                <tbody>
                            <?php
                            require_once "includes/dbcode.php";

                            // Select data from the profile table
                            $query = "SELECT * FROM profile";
                            $results = mysqli_query($connection,$query);
                            if(!$results){
                                die("query-failed" .'msqli_error'());
                            }   
                             else{
                                while($row = mysqli_fetch_assoc($results)){
                                echo'<tr>';
                                  echo '<td>' . $row['id'] . "</td>";
                                  echo '<td>' . $row['Name'] . "</td>";
                                  echo '<td>' . $row['Tell'] . "</td>";
                                  echo"<td><img src = 'data:image/jpeg;base64," . base64_encode($row['Avatar']) . 
                                 "'  width = '50' height = '50' alt = 'Avatar'></td>";
                             echo'<tr>'; 

                                                              
                                
                                }
                            }


                        
                             // Close connection
                             mysqli_close($connection);
                            ?>
                 </tbody>
            </table>

        </div>
        
    </body>
</html>