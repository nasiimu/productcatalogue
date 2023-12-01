<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>REGESTER</title>
        <?php include 'includes/head.html';?>

    </head>
    <body>
        <?php include 'includes/nav.php';?>
   

    
        <div class = "container">
    
            <table>
                <thead>
                <tr>
                <th scope = "col">id</th>
                <th scope = "col">FirstName</th>
                <th scope = "col">LastName</th>
                <th scope = "col">Age</th>

                   
                
                </tr>

                </thead>
                <?php
                        require_once "includes/dbcode.php";
                            $query = "SELECT * FROM regestration";
                            $results = mysqli_query($connection,$query);
                            if(!$results){
                                die("query-failed" .'msqli_error'());
                            }
                                else{
                                    while($row = mysqli_fetch_assoc($results)){
                                    echo'<tr>';
                                    echo '<td>' . $row['id'] . "</td>";
                                    echo '<td>' . $row['FirstName'] . "</td>";
                                    echo '<td>' . $row['LastName'] . "</td>";
                                    echo '<td>' . $row['Age'] . "</td>";
                            
                                    echo '<td>'; 
                                    echo '<a class ="btn btn-primary" href="Regestration.php?id='.$row['id'].'">Regester</a>';
                                    echo '</td>';

                                    
                                        
                        
                                    
                                
                            echo'</tr>';
                                
                                    
                                    }
                                }
                        ?>
                
                

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>nash</td>
                        <td>nakate</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>namu</td>
                        <td>naate</td>
                        <td>25</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>limu</td>
                        <td>nakate</td>
                        <td>25</td>
                    </tr>


                </tbody>
                
            </table>
            
            

            
        </div>
    </body>
</html>