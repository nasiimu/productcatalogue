<!DOCTYPE html>
<html>
      <head>
        <title>PROOFAFRICANBEAUTY USA</title>
        <?php include 'includes/head.html';?>
        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: pink;
            padding: 20px;
            margin: 20px;
            color: white;
           
        }
        h1, p {
            margin-bottom: 20px;
        }
        <p>This is <span style="color: red;">red</span> text.</p>

    </style>


      </head>
      <body>
        <?php include 'includes/nav.php';?>
        <div class = "row" mt-5>
              <!-- first column -->
          <div class = col-lg-3>
              <h4 style="color: purple; font-size: 16px; text-align: left;"> 
                  Indulge your skin in the luxurious embrace<br>
                  of our exquisite beauty creams,meticulously<br> 
                  crafted to redefine your skincare experience.<br>
                  Immerse yourself in the harmonious blend <br> 
                  ingredients and cutting-edge technology,<br>
                  as our creams deliver a sensorial journey <br>
                  that transcends the ordinary. Enriched<br>
                  with potent antioxidants, vitamins,<br> 
                  and nourishing botanical extracts<br>
                  our formulations are designed<br> 
                  to replenish, hydrate, and restore<br>
                  your skin's natural radiance.<br> 
                  Experience the sublime fusion of science<br>
                  and nature as our beauty creams effortlessly<br> 
                  melt into your skin,<br> 
                  leaving behind a velvety, satin-smooth finish.<br>
              </h4> 
          </div>    

            <!-- second column -->
            <div class = "col-lg-6"> 

              <center>                                                               
                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel"data-bs-interval="3000">
                  <div class="carousel-inner" style = "animation">
                      <div class="carousel-item active">
                        <img  src="images/collection.jpg" alt = "GFG" width="900" height ="400" class = "d-block w-20" alt="best of african products">
                      </div>
                      <div class="carousel-item">
                        <img  src="images/honeycomb.jpg" alt = "GFG" width ="900" height ="400" class= "d-block w-20" alt =" honey">
                      </div>
                      <div class="carousel-item">
                        <img  src="images/honey.jpg" alt = "GFG" width ="900" height ="400" class= "d-block w-20" alt =" honey">
                      </div>
                      <div class="carousel-item">
                        <img  src="images/africabblacksoap.jpg" alt = "GFG" width ="900" height ="400" class= "d-block w-20" alt ="blacksoap">
                      </div>
                  </div>
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </center> 
            </divv>
          </div>
          <!-- third colomn -->
          <div class=col-lg-3>
           
              <img  src="images/preview.jpg" alt = "GFG" width ="300" height ="300" class= "d-block w-10" alt =" honey">
              <p style="color: blue; font-size: 16px; line-height: 1.5; text-align: justify;">samples of our clients brown and dark<br>
                 fineglowingskin<b>@proofafricanbeautyUSA</b><br>
                  it the answer to your skin problems<br>
              </p>
          </div>
    </div>                  
              <?Php include 'includes/footer.php';?>   
 
  </body>
</html>




