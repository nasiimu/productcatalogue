
<!DOCTYPE html>

<html>
   
  <head>
       <title>Add products</title>
      <?php include 'includes/head.html';?>
  </head>
  <body>
      <div class="container mt-5">
      <?php include 'includes/nav.php';?>
      <h2>ADD PRODUCTS</h2>
      <form action= "includes/processupdate.php" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="ProductName" placeholder="name">
        </div>

        <div class="form-group">
            <label for="image">Image:</label>
            <input type="text" class="form-control" name="ProductImage" placeholder="image">
        </div>
        <div class="form-group">
            <label for="Price">Price:</label>
            <input type="text" class="form-control" name="ProductPrice" placeholder="price">
        </div>

        <div class="form-group">
            <label for="message">Description:</label>
            <textarea class="form-control" name="ProductDescription" rows="4" placeholder="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
     <span>&copy; <h3 CLASS = text-white>Product of africa</h3></span>
            <div class ="row">
              <div class ="col-lg-3">
                <p>whatsapp</p>
                <p>contacts</p>
                <p>E-mail</p>
                <p>call Now</p>
              </div>
              <div class ="col-lg-6">
                <h3>Contact us</h3>
                <p>located in florida USA</p>
                <P>+17654323222</P>
                <P>www.proofafricaus.com</P>
              </div>

              <div class ="col-lg-3">
                <ul>
                  <li>find us</li>
                  <li>instagram</li>
                  <li>twiter</li>
                  <li>facebook</li>
                  <li>youtube</li>
                </ul>
              </div>
            </div>

  </body>
</html>