
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
            </div>
         </div>
      </header>
   
      <!-- Main Content ----->
      <div class="content-box">
         <!-- Hero Section -->
         <section class="section section-hero">
            <div class="hero-box">
               <div class="container">
                <div class="hero-text align-center">
                    <h1>Please enter a date!</h1>
                 </div>
                 
                 <form class="destinations-form" method="post" action="https://christophervalerio.fun/Hotel/370prj/php/setDate.php" onsubmit="return validateDate();">
                    <div class="input-line">
                       <input type="date" name="date" value="" class="form-input check-value" required />
                       <button type="submit" name="date-submit" class="form-submit btn btn-special">Continue</button>
                    </div>
                 </form>
               </div>
            </div>


         </section>


      </div>

      <!-- Footer -->
      <!-- Scripts -->
      <script src="js/jquery.js"></script>
      <script src="js/functions.js"></script>
   </body>
</html>

<script>
function validateDate() {


   return true;
}


</script>
