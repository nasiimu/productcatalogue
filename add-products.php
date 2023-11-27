
<!DOCTYPE html>

<html>
   
  <head>
       <title>Add products</title>
      <?php include 'includes/head.html';?>
  </head>
  <body>
      <div class="container mt-5">
      <?php include 'includes/nav.php';?>
      <h2>Contact Us</h2>
      <form>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="Name" placeholder="name" required>
        </div>

        <div class="form-group">
            <label for="image">Image:</label>
            <input type="text" class="form-control" name="Image" placeholder="image" required>
        </div>
        <div class="form-group">
            <label for="Price">Price:</label>
            <input type="text" class="form-control" name="Price" placeholder="price$" required>
        </div>

        <div class="form-group">
            <label for="message">Description:</label>
            <textarea class="form-control" name="Description" rows="4" placeholder="description" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </body>
</html>