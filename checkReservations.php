
<?php
   session_start();
   if($_SESSION['date'] == "") {
      header("Location:  ./date.php");
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
      <!-- <link rel="stylesheet" href="css/main.css"> -->
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


      <div class = "Main">

        <div class="content-box">
            <!-- Hero Section -->
            <section class="section section-hero">
               <div class="hero-box hero-box-pad">
                  <div class="container">
                        <!-- MAIN_CONTENT STARTS -->

                        <form >

                        <table id="contentTable" class="table table-hover">
                        <thead class="thead-dark">
                        <tr>
                        <th scope = "col">Reservation ID</th>
                        <th scope = "col">Number Deluxe Rooms</th>
                        <th scope = "col">Number Regular Rooms</th>
                        <th scope = "col">Start Date</th>
                        <th scope = "col">End date</th>
                        <th scope = "col">Price Deluxe Rooms</th>
                        <th scope = "col">Price Regular Rooms</th>
                        <th scope = "col">Location(i,j)</th>
                        <th scope = "col">customer ID</th>
                        </tr>

                        </thead>
                        </table>
                        </form>

                    
                        <!-- MAIN_CONTENT ENDS -->
                  </div>
               </div>

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

   <script>
   
    var allQues = <?php echo $_SESSION['reservationAdminResult'];  ?>;
    console.log(allQues);
    var table = document.getElementById("contentTable");
    for(var x = 0; x < allQues.length; x++){
        var row = document.createElement("TR");
        row.setAttribute("id", "row_"+x);
        table.appendChild(row);
        for(var y =0; y < allQues[x].length; y++){
            var cell = document.createElement("TD");
            var t = document.createTextNode(allQues[x][y]);
            cell.appendChild(t);
            document.getElementById("row_"+x).appendChild(cell);
            }
          }



   </script>

</html>
