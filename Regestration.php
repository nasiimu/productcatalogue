
<html>
   
    <head>
        <title>REGESTRATION</title>      
         

    </head>
   
       
               
       
    <body> 

              <h2>Regestration</h2>
            <form>
                Name:<input type="text" class="form-control" name="Name">
                 <?php if(isset($name) && $name =="Name") echo "Name";?> 
                    
                 Age:<input type="Number" class="form-control" name="Age">                 
                 <?php if(isset($age) && $age =="Age") echo "Age"; ?>
                  <button type="submit" class="btn btn-primary">Regester</button>

                    

            </form>
            <?php
            echo "<p>Name:Nakamatte</p>";
            echo "<p>Name:25</p>";




            ?>








           
            
    </body 
</html>



