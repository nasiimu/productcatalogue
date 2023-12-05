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
                        <th>Name</th>
                        <th>Tell</th>
                        <th>Avatar</th>
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

                                                              
                                  echo '<td>'; 
                                  echo '<a class ="btn btn-primary" href="form.php?id='.$row['id'].'">uploadAvatar </a>';
                                  echo '</td>';
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