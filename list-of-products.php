<!DOCTYPE html>

<html>
  <head>
      <titlte>PRODUCTS LIST</titlte>
      <?php include 'includes/head.html';?>
       <?php include 'includes/dbcode.php';?>  
  </head>    
  <body>
      <div class ="row">
            <?php include 'includes/nav.php';?>
      </div>
      <table class="table table-striped table-bordered table-hover ">
          <thead>
              <tr>
                <th scope = "col">id</th>
                <th scope = "col">ProductName</th>
                <th scope = "col">Image</th>
                <th scope = "col">Price</th>
                <th scope = "col">Description</th>
                <td scoop ="col">Update</td>
                <td scoop = "col">Delete</td>
                
                
              </tr>
          </thead>
          <tbody>
                <div class = "container">
                      <div class= "row">
                    <?php
                    require_once "includes/dbcode.php";
                        $query = "SELECT * FROM products";
                        $results = mysqli_query($connection,$query);
                        if(!$results){
                            die("query-failed" .'msqli_error'());
                        }
                            else{
                                while($row = mysqli_fetch_assoc($results)){
                                echo'<tr>';
                                  echo '<td>' . $row['id'] . "</td>";
                                  echo '<td>' . $row['ProductName'] . "</td>";
                                  echo '<td>' . $row['ProductImage'] . "</td>";
                                  echo '<td>' . $row['ProductPrice'] . "</td>";
                                  echo '<td>' . $row['ProductDescription'] . "</td>";
                                  echo '<td>'; 
                                  echo '<a class ="btn btn-success" href="updateproducts.php?id='.$row['id'].'">Update </a>';
                                  echo '</td>';

                                  echo '<td>'; 
                                  echo '<a class ="btn btn-danger" href="includes/processdelete.php?id='.$row['id'].'">Delete </a>';
                                  echo '</td>';
                                      
                      
                                  
                              
                          echo'</tr>';
                              
                                
                                }
                            }
                    ?>
              


                </div>

              </div>

              
            </tbody>
        </table>
  </body>
</html>