<!DOCTYPE html>
<html >
    <head>
        <title>profile</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    </head>
        <?php include 'includes/dbcode.php';?>       

        <body>
        
        <div class = "container">
          <form action ="profile.php"  method="post" name="comments_form" enctype="multipart/form-data">
                  <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" name="Name" placeholder="name">
              </div>

              <div class="form-group">
                  <label for="Tel">Tell:</label>
                  <input type="numbers"  name="Tell" placeholder="Tell" class = "form-control">
              </div>
                      
              <div>
                      <label>Add your avatar<span>*</span></label>
                      <input name="Avatar" type="file" class = "form_control_file">
              <div>
                      
                      <button type="submit" class = "btn btn-primary">submit</utton>
          </form>
        </div>

        
    </body>
</html>