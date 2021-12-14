<!doctype html>
<html>
<head>
    <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
       
    <title>All-Dressed Ruffles</title>
    
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
</head>
<body onload="resubmit()">

    <header>
        <div class="container">
            <div class="nav-logo">
                <a href="index.php"><img src="logo.jpg" class="nav-logo-img" alt="Store Logo" height="120" width="120"></a>
           </div>
           <br>
           <div class="store-name">
            <a href="index.php"> MARCHÉ CONCORDIA</a>
            </div>
           
        <nav class="navigation">
        <ul>
          <li>
              <a
                href="https://www.google.com/maps/place/Pavillion+Henry+F.Hall+Bldg,+Boulevard+de+Maisonneuve+O,+Montreal,+QC+H3G+1M8/@45.4973223,-73.5812175,17z/data=!3m1!4b1!4m5!3m4!1s0x4cc91a6a8799deb5:0x1ca01f129dc2ef02!8m2!3d45.4973223!4d-73.5790288"
                class="location"
                ><img
                  src="images/location.jpg"
                  class="location-img"
                  height="55"
                  width="55"
              /></a>
            </li>
            <li><a href="signIn.php" class="sign-in" ><img src="sign-in.png" class="sign-in-img" height="55" width="55"></a></a></li>
            <li><a href="yourCart.php" class="cart" ><img src="cart.png" class="cart-img" height="55" width="55"></a></li>
                
        </ul>
        </nav>
    </div>
    </header>
    
    <header class="secondary-header">
        <div class="container-other">
            <nav class="navigation-other">
                <ul>
                    <!-- <li><a href="#" class="home-page">HOME</a></li> -->
    
                    <li>
                        
                        <div class="dropdown">
                            <button class="dropbtn">CATEGORIES</button>
                            <div class="dropdown-content">
                              <a href="category1_final.php">Fruits and Vegtables</a>
                              <a href="category3_final.php">Dairy Products</a>
                              <a href="category2_final.php">Frozen Items</a>
                              <a href="category4_final.php">Grocery</a>
                            </div>
                          </div>
                    </li>
                    <li><a href="COMING SOON.php" class="deals">DEALS</a></li>
                    <!-- <li><a href="" class="locations">OTHER LOCATIONS</a></li> -->
                        
                </ul>
                </nav>
        </div>
    </header>
        
    <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="product_image">
                            <a href="#">   <img src="grocery/ruffles.jpg" alt = "ruffles image" width="300"> </a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" right-side">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>All-Dressed Ruffles</h2>
                        </div>

                        <div class = "company-name">
                            <p> Ruffles</p>
                        </div>

                        <div class = "product-size">
                            <p> 200 g</p>
                        </div>
                        
                        <div class = "product-price">
                            <p>  $2.50</p>
                         </div>
                        

                         <button class = "button0" onclick="myFunction()"> More Description</button>
                      <div class="line_text">
                  <p> Brought over from Canada – where it has been the #1 Ruffles® flavor. A blend of salty, 
                      savory and sweet flavors, all at the same time. Think salt & vinegar, ketchup, and BBQ all rolled together.</p>
                  </div>

             <!-- quantity -->

                     <div class = "quantity">
                    <label for="quantity">Qty:</label>
                    <input type="number" id="quantity" name="quantity" min="1" max="10" onchange="totalCost()">
                    <p class="total" id="total" name = "quantity"></p>
                       </div>

                       <div class = "button">
                        <br><br>
                        <a href="yourCart.php" class="btn primary">ADD TO CART</a>
                    
                      <br><br>
                              </div>
            
            
            
                      
                       
                    </div>
                </div>


            </div>
    </div>
    <script>
        var y = 2.50;
        var key = "32";
    </script>
</body>
</html>
