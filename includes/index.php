            <?php include('head.php');?>
            <?php include('dbcode.php');?> 



    <h2>ALL PRODUCTS</h2>
    <button class = "btn btn-primary" data-toggle="modal" data-target="#examplemodal" ></button>ALL PRODUCTS</button>
    <table class = "table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>SR.NO</th>
                <th>NAME</th>
                <th>IMAGE</th>
                <th>PRICE</th>
                <th>DESCRIPTION</th>
                <th>BRAND</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM products";
                $results = mysqli_query($connection,$query);
                if(!$results){
                    die("query-failed");
                }
                    else{
                        while($row = mysqli_fetch_assoc($results)){
                    
                           echo'<tr>';
                                echo '<td>' . $row['id'] . "</td>";
                                
                            echo'</tr>';
                          
                        }
                    }
                ?> 
           
        </tbody>
    </table>
    <?php include ('footer.php');?>