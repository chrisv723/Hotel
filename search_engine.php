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
      <link rel="stylesheet" href="css/search_engine.css">
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

                        <form action="php/searchQuery.php" method="post">
                            <div >
                              <div >
                                  <label><i class="fa fa-calendar-o"></i> Check In Date</label>
                                  <input class="checkDate form-control" id="checkIn" name="checkIn" type="date" required>
                              </div>

                              <div >
                                <label><i class="fa fa-calendar-o "></i> Check Out Date</label>
                                <input class="checkDate form-control" type="date" id="checkOut"  name="checkOut" required>
                              </div>

                              <div >
                                <label><i class="fa fa-male"></i> Search By</label>
                                <select id="searchByMenu" class="form-control" onload = "searchByHotel() " onchange="if (this.selectedIndex == 2) range(); else if(this.selectedIndex == 1) searchByLocation(); else searchByHotel();" name="searchBy">
                                <option value="hotelName">Hotel Name</option>
                                <option value="hotelLoc">Hotel Location (i , j)</option> 
                                 <option value="priceRng">Price Range</option>
                                </select>
                              </div>

                              <div id="searchEntry">
                                <!-- <label><i class="fa fa-calendar-o"></i> Search </label>
                                <input id="searchInput" class="form-control" type="text"  name="searchInput" placeholder="Search Hotels"> -->
                              </div>

                              <div style="padding-top:15px;" id = "buttonSearch">
                                <button  class="btn-primary btn-lg" type="submit" >Search</button>
                              </div>
                            </div>
                          </form>
                        <!--class="w3-button w3-block w3-black"-->




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
   <script>

      searchByHotel();

   	function range() {
      var input = document.getElementById("searchEntry");
      input.innerHTML="";
       var minPrice = document.createElement("input");
       minPrice.setAttribute("id", "min1");
       minPrice.setAttribute("name", "minPrice");
       minPrice.setAttribute("type", "number");
       minPrice.setAttribute("class", "form-control");
       minPrice.setAttribute("min", "1");

       var label = document.createElement("label");
       label.setAttribute("for", "min1");
       label.setAttribute("id", "minLabel");
       
       label.innerHTML = "Min Price";

       var maxPrice = document.createElement("input");
       maxPrice.setAttribute("id", "max");
       maxPrice.setAttribute("name", "maxPrice");
       maxPrice.setAttribute("type", "number");
       maxPrice.setAttribute("class", "form-control");
       maxPrice.setAttribute("min", "1");

       var label2 = document.createElement("label");
       label2.setAttribute("for", "max");
       label2.setAttribute("id", "maxLabel");
       label2.innerHTML = "Max Price";


       input.appendChild(label);
       input.appendChild(minPrice);

       input.appendChild(label2);
       input.appendChild(maxPrice);

       document.getElementById("buttonSearch").hidden = false;
      }
      
      function searchByHotel() {

      //  0 - Hilton, 1 - Marriot, 2 - Westin, 3 - Hyatt, 4 - Four Seasons
       var input = document.getElementById("searchEntry");
       input.innerHTML = "";
       var label = document.createElement("label");
       label.innerHTML = "Search";
       var search = document.createElement("select");
       search.setAttribute("name", "searchInput");
       search.setAttribute("class", "form-control");

      var opt = document.createElement('option');
      opt.appendChild( document.createTextNode("Hilton") );
      opt.value = 0 ; 
      search.appendChild(opt); 
      input.appendChild(label);
      input.appendChild(search);

      var opt = document.createElement('option');
      opt.appendChild( document.createTextNode("Marriot") );
      opt.value = 1 ; 
      search.appendChild(opt); 
      input.appendChild(label);
      input.appendChild(search);

      var opt = document.createElement('option');
      opt.appendChild( document.createTextNode("Westin") );
      opt.value = 2 ; 
      search.appendChild(opt); 
      input.appendChild(label);
      input.appendChild(search);

      var opt = document.createElement('option');
      opt.appendChild( document.createTextNode("Hyatt") );
      opt.value = 3 ; 
      search.appendChild(opt); 
      input.appendChild(label);
      input.appendChild(search);

      var opt = document.createElement('option');
      opt.appendChild( document.createTextNode("Four Seasons") );
      opt.value = 4 ; 
      search.appendChild(opt); 
      input.appendChild(label);
      input.appendChild(search);

       document.getElementById("buttonSearch").hidden = false;

     }

     function searchByLocation() {
      var input = document.getElementById("searchEntry");
      input.innerHTML="";
       var iInput = document.createElement("select");
       iInput.setAttribute("id", "i");
       iInput.setAttribute("name", "iCorr");
      //  iInput.setAttribute("type", "select");
       iInput.setAttribute("class", "form-control");

       for(var i = 0; i < 100; i++){
         var opt = document.createElement('option');
         opt.appendChild( document.createTextNode(i) );
         opt.value = i ; 
         iInput.appendChild(opt); 

         }

       var label = document.createElement("label");
       label.setAttribute("for", "i");
       label.setAttribute("id", "ilabel");
       label.innerHTML = "Insert i";


       var jInput = document.createElement("select");
       jInput.setAttribute("id", "j");
       jInput.setAttribute("name", "jCorr");
      //  jInput.setAttribute("type", "select");
       jInput.setAttribute("class", "form-control");

       for(var i = 0; i < 100; i++){
         var opt = document.createElement('option');
         opt.appendChild( document.createTextNode(i) );
         opt.value = i ; 
         jInput.appendChild(opt); 
         }


       var label2 = document.createElement("label");
       label2.setAttribute("for", "j");
       label2.setAttribute("id", "jLabel");
       label2.innerHTML = "Insert j";


       input.appendChild(label);
       input.appendChild(iInput);

       input.appendChild(label2);
       input.appendChild(jInput);

       document.getElementById("buttonSearch").hidden = false;

     }

   //   function searchHotel() {
   //     var inDate = document.getElementById("checkIn");
   //     var outDate = document.getElementById("checkOut");
   //     var searchByMen = document.getElementById("searchByMenu");
   //     var input = document.getElementById("searchInput");



   //     if(!inDate.value || !outDate.value || input.value == "") {
   //       alert("Must Enter check in/out Date & non empty search value");
   //       return false;
   //     }

   //     document.getElementById("buttonSearch").hidden = false;

   //     return true;
   //   }

   </script>
</html>
