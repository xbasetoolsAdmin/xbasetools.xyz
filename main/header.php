<?php  ob_start(); session_start(); date_default_timezone_set('UTC'); include "../includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: ../");     exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?>
<!DOCTYPE html><html><head><meta charset="UTF-8"> <meta name="viewport" content="width=device-width" />
               
                                               <title> Main </title>
  
<!------------Bootstrap CSS library------------>

<!----------MDBootstrap assets library--------->

<!---------------jquery JS library------------>
  
    <script src="https://code.jquery-3.5.1.min.js"></script>
  
<!---------cdn dataTable css library--------->

<!---------cdn dataTable js library--------->

<!---------cdn  js component library--------->

<!---------xbasetools text/js library--------->


    <script type="text/javascript">
        // Notice how this gets configured before we load Font Awesome
        window.FontAwesomeConfig = {
            autoReplaceSvg: false
        }
    </script>
    
    <!---------cdn dataTable css library--------->
    
    <style>
        @import url(//fonts.googleapis.com/css?family=Roboto:400);
 
        .navbar-nav .dropdown-menu {
            margin: 0 !important
        }
</style>

<!---------cdn dataTable css library--------->

</head>
