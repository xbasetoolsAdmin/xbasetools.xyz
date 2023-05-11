

<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "../includes/config.php";
if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) { header("location: ../"); exit();}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?> 
<html class="theme-dark">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="revisit-after" content="2 days">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="shortcut icon" href="../../favicon.ico">
		<title>Ticket</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" >
	</script>
			<script src="jquery.dataTables.min.js"></script>
					<script src="files/js/main.js"></script>
		<script src="layout/js/clipboard.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="layout/js/bootstrap.min.js"></script>
		<script src="files/js/bootbox.min.js"></script>
		<link rel="stylesheet" type="text/css" href="files/css/flags.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<link href="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
		<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
		<script async="" src="//www.googletagmanager.com/gtag/js?id=UA-177092549-1"></script>
		<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('set', {'$usrid': 'USER_ID'}); // Set the user ID using signed-in user_id.
        gtag('config', 'UA-177092549-1');
        
		</script>
		<link rel="stylesheet" href="files/css/all.min.css" />
		<link rel="stylesheet" href="files/css/main.css" />
		<link rel="stylesheet" href="layout/css/util.css" />
		<style>body{padding-top:80px}</style>
		<link rel="stylesheet" href="layout/fonts/iconic/css/material-design-iconic-font.min.css">
		<script src="layout/js/main.js"></script>
		<script type="text/javascript">
            // Notice how this gets configured before we load Font Awesome
            window.FontAwesomeConfig = { autoReplaceSvg: false }
        
		</script>
		<style>
            @import url(//fonts.googleapis.com/css?family=Roboto:400);
            .navbar-nav .dropdown-menu
            {
            margin:0 !important
            }
        
		</style>
        </head>