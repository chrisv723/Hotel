<?php
   session_start();
   if($_SESSION['date'] == "") {
      header("Location: ./date.php");
   }
?>


<!DOCTYPE html>
<html>
   <head>
      <title>My Hotel Deals</title>
      <meta charset="utf-8">
      <meta name="description" content="Traveling HTML5 Template" />
      <meta name="author" content="Design Hooks" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700" rel="stylesheet" />
      <link href="img/favicon.png" type="image/x-icon" rel="shortcut icon" />
      <link href="css/screen.css" rel="stylesheet" />
   </head>
   <body class="home" id="page">
      <!-- Header -->
      <header class="main-header">
         <div class="container">
            <div class="header-content">
               <a href="index.php">
                  <img src="img/logo1.png" alt="site identity" />
               </a>
				
               <nav class="site-nav">
                <ul class="clean-list site-links">
                   <li>
                      <a href="map.php">CITY MAP</a> <!-- might show the top 10 hotels with the most expensive rooms-->
                   </li>
                   <li>
                      <a href="search_engine.php">Search Hotels</a>
                   </li>
                    <li>
                        <a href="login.php" class="btn btn-outlined">Sign up / Login</a>
                    </li>

                    <li id="dateLi"> 
                     <script>
                        var dateValue = "<?php echo $_SESSION['date'] ?>";
                        console.log(dateValue);
                        document.getElementById("dateLi").innerHTML = dateValue.toString(); 


                     </script>
                    </li>
                </ul>
             </nav>
            </div>
         </div>
      </header>

      <!-- Main Content -->
      <div class="content-box">
         <!-- Hero Section -->
         <section class="section section-hero">
            <div class="hero-box">
               <div class="container">
                  <div class="hero-text align-center">
                     <h1>Reserve your hotel now!</h1>
                     <button type="button" name="destination-submit" class="form-submit btn btn-special"
                     onclick="window.location='search_engine.php';" 
                     >Find a Hotel</button>
                  </div>
               </div>
            </div>
            

            <!-- Statistics Box -->
            <div class="container">
               <div class="statistics-box">
                  <div class="statistics-item">
                     <span class="value">$<?php echo $_SESSION['minPrice'] . ' - $' . $_SESSION['maxPrice']; ?> </span> <!-- prices  -->
                     <p class="title">Our Price Range</p>
                  </div>

                  <div class="statistics-item">
                     <span class="value">5</span> <!-- number of chains  -->
                     <p class="title">Hotel Chains</p>
                  </div>

                  <div class="statistics-item">
                     <span class="value"><?php echo $_SESSION['numHotels']; ?></span> <!-- number of hotels  -->
                     <p class="title">Locations</p>
                  </div>

                
              </div>
            </div>
         </section>

         <!-- Destinations Section -->
         <section class="section section-destination">
            <!-- Title -->
            <div class="section-title">
               <div class="container">
                  <h2 class="title">Hotel franchises in our network</h2>
                  <p class="sub-title">Book With Our Partners&nbsp;</p>
               </div>
            </div>

            <!-- Content -->
            <div class="container">
               <div class="row">
                  <div class="col-md-16 col-xs-24">
                     <div class="destination-box">
                        <div class="box-cover">
                           <!--<a href="chain.php">-->
                              <img src="img/destination-1.jpg" alt="destination image" />
                           <!--</a>-->
                        </div>

                        <!--<span class="boats-qty">730</span>-->

                        <div class="box-details">
                           <div class="box-meta">
                              <h4 class="city">Hilton</h4>
                              <p class="country">Hotel & Resorts</p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-8 col-sm-12 col-xs-24">
                     <div class="destination-box">
                        <div class="box-cover">
                           <!--<a href="chain.php">-->
                              <img src="img/destination-2.jpg" alt="destination image" />
                           <!--</a>-->
                        </div>

                        

                        <div class="box-details">
                           <div class="box-meta">
                              <h4 class="city">Marriott</h4>
                              <p class="country">Hotel & Resorts</p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-8 col-sm-12 col-xs-24">
                     <div class="destination-box">
                        <div class="box-cover">
                           <!--<a href="chain.php">-->
                              <img src="img/destination-3.jpg" alt="destination image" />
                           <!--</a>-->
                        </div>

                       

                        <div class="box-details">
                           <div class="box-meta">
                              <h4 class="city">Westin</h4>
                              <p class="country">Hotel & Resorts</p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-8 col-sm-12 col-xs-24">
                     <div class="destination-box">
                        <div class="box-cover">
                           <!--<a href="chain.php">-->
                              <img src="img/destination-4.jpg" alt="destination image" />
                           <!--</a>-->
                        </div>

                        

                        <div class="box-details">
                           <div class="box-meta">
                              <h4 class="city">Hyatt</h4>
                              <p class="country">Hotel & Resorts</p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-8 col-sm-12 col-xs-24">
                     <div class="destination-box">
                        <div class="box-cover">
                           <!--<a href="chain.php">-->
                              <img src="img/destination-5.jpg" alt="destination image" />
                           <!--</a>-->
                        </div>

                        

                        <div class="box-details">
                           <div class="box-meta">
                              <h4 class="city">Four Seasons</h4>
                              <p class="country">Hotel & Resorts</p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="load-destinations-box">
                     <div class="col-md-8 col-sm-12 col-xs-24">
                        <div class="destination-box">
                           <div class="box-cover">
                              <a href="#">
                                 <img src="img/destination-4.jpg" alt="destination image" />
                              </a>
                           </div>

                           <span class="boats-qty">495</span>

                           <div class="box-details">
                              <div class="box-meta">
                                 <h4 class="city">Portofino</h4>
                                 <p class="country">Italy</p>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-md-8 col-sm-12 col-xs-24">
                        <div class="destination-box">
                           <div class="box-cover">
                              <a href="#">
                                 <img src="img/destination-5.jpg" alt="destination image" />
                              </a>
                           </div>

                           <span class="boats-qty">402</span>

                           <div class="box-details">
                              <div class="box-meta">
                                 <h4 class="city">Port Hercules</h4>
                                 <p class="country">Monaco</p>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-md-8 col-sm-12 col-xs-24">
                        <div class="destination-box">
                           <div class="box-cover">
                              <a href="#">
                                 <img src="img/destination-3.jpg" alt="destination image" />
                              </a>
                           </div>

                           <span class="boats-qty">543</span>

                           <div class="box-details">
                              <div class="box-meta">
                                 <h4 class="city">Palma de Mallorca</h4>
                                 <p class="country">Spain</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

     

         <!-- Boats Section -->
         <section class="section section-boats">
            <!-- Title -->
            
            <!-- Content -->
           
             
         </section>
      </div>

      <!-- Footer -->
      <footer class="main-footer">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <div class="widget widget_links">
                     <h5 class="widget-title">Top Locations</h5>
                     <ul>
                        <li><a href="#">Lorem impsum dolor</a></li>
                        <li><a href="#">Sit amet consectetur</a></li>
                        <li><a href="#">Adipisicing elit</a></li>
                        <li><a href="#">Eiusmod tempor</a></li>
                        <li><a href="#">incididunt ut labore</a></li>
                     </ul>
                  </div>
               </div>

               <div class="col-md-5">
                  <div class="widget widget_links">
                     <h5 class="widget-title">Featured Boats</h5>
                     <ul>
                        <li><a href="#">Lorem impsum dolor</a></li>
                        <li><a href="#">Sit amet consectetur</a></li>
                        <li><a href="#">Adipisicing elit</a></li>
                        <li><a href="#">Eiusmod tempor</a></li>
                     </ul>
                  </div>
               </div>

               <div class="col-md-9">
                  <div class="widget widget_social">
                     <h5 class="widget-title">Subscribe to our newsletter</h5>
                     <form class="subscribe-form">
                        <div class="input-line">
                           <input type="text" name="subscribe-email" value="" placeholder="Your email address" />
                        </div>
                        <button type="button" name="subscribe-submit" class="btn btn-special no-icon">Subscribe</button>
                     </form>

                     <ul class="clean-list social-block">
                        <li>
                           <a href="#"><i class="icon-facebook"></i></a>
                        </li>
                        <li>
                           <a href="#"><i class="icon-twitter"></i></a>
                        </li>
                        <li>
                           <a href="#"><i class="icon-google-plus"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>

               <div class="col-md-5">
                  <div class="widget widget_links">
                     <h5 class="widget-title">Contact us</h5>
                     <ul>
                        <li><a href="#">Lorem impsum dolor</a></li>
                        <li><a href="#">Sit amet consectetur</a></li>
                        <li><a href="#">Adipisicing elit</a></li>
                        <li><a href="#">Eiusmod tempor</a></li>
                        <li><a href="#">incididunt ut labore</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <!-- Scripts -->
      <script src="js/jquery.js"></script>
      <script src="js/functions.js"></script>
   </body>
</html>
