
<?php
$currentDate = date("l, F j, Y");


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather App</title>
  <link rel="stylesheet" href="css/webstyle.css">


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script> 

  <!-- JQUERY-CONFIRM CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


</head>
<body>
<div class="container">
  <h1>Weather App</h1>
  <input type="text" name="city" id="city" placeholder="Enter the City">
  <button id="get-weather"><i class="fa fa-search"></i></button>


  <div id="weather-info">
    <!-- defined in jquery-->
  </div>

  <div id ="date-info">
  <?php
  echo $currentDate;
  ?>
  </div>




</div>



  <!-- jQuery Plugins-->
  <script src="jquery/scriptweb.js"></script>

  
</body>
</html>