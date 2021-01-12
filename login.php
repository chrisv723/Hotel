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
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                </ul>
             </nav>
            </div>
         </div>
      </header>


      <div class = "Main">

        <div class="content-box">
            <!-- Hero Section -->
            <section class="section section-hero">
               <div class="hero-box">
                  <div class="container">
                        <!-- MAIN_CONTENT STARTS -->
                        <div class="container h-100">
                            <div class="d-flex justify-content-center h-100">
                                <div class="user_card">
                                    <div class="d-flex justify-content-center">
                                        <div class="brand_logo_container">
                                            <img src="img/logo.png" class="brand_logo" alt="Logo">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center form_container">
                                        <!-- form on action will send data to the server POST -->
                                        <form action="./php/loginProj2.php" method="post">
                                            <div class="input-group mb-3">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" name="name" class="form-control input_user" value="" placeholder="username" required>
                                            </div>
                                            <div class="input-group mb-2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                </div>
                                                <input type="password" name="password" class="form-control input_pass" value="" placeholder="password" required>
                                            </div>
                                                <div class="d-flex justify-content-center mt-3 login_container">
                                         <button type="submit" name="button" class="btn login_btn">Login</button>
                                       </div>
                                        </form>
                                    </div>

                                    <div class="mt-4">
                                        <div class="d-flex justify-content-center links">
                                            Don't have an account? <a href="signup.php" class="ml-2">Sign Up</a>
                                        </div>
                                        <!-- <div class="d-flex justify-content-center links">
                                            <a href="#">Forgot your password?</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- MAIN_CONTENT ENDS -->
                  </div>
               </div>

               <!-- Statistics Box -->

            </section>

         </div>


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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="js/jquery.js"></script>
        <script src="js/functions.js"></script>
   </body>
</html>
