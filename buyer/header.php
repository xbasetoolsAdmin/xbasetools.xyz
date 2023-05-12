
<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "../includes/config.php";
if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: login");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?><!DOCTYPE html>
<html class="theme-dark">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="revisit-after" content="2 days">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="favicon.ico.png">
 
    <title>Ticket</title>
    <link rel="stylesheet" href="layout/css/all.xbasetools.css">\
    
<html>
	<head>
		<title>How to Dynamically Display Hide DataTables Column with PHP Ajax</title>
		<!-- JS, Popper.js, and jQuery -->
		<script  src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<!-- CSS only -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

		
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>  
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  		<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
   
        <link rel="stylesheet" href="layout/css/bs.xbasetools.min.css">
    <link rel="stylesheet" href="layout/css/bs.main.css">
    <link rel="stylesheet" href="layout/css/bs.xbasetools.css">
    <link rel="stylesheet" href="layout/fonts/iconic/css/material-design-iconic-font.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="layout/css/flags.css">
    <style>
        body {
            padding-top: 80px
        }
    </style>
    <script src="layout/js/all.xbasetools.min.js">
    </script>
    <script src="layout/js/bootbox.min.js"></script>
    <script src="layout/js/jquery-3.5.1.min.js"></script>
    <script src="layout/js/clipboard.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
 
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
    <script src="jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
    </script>
    <style type="text/css">
        /* Chart.js */
        @-webkit-keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }
 
            to {
                opacity: 1
            }
        }
 
        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99
            }
 
            to {
                opacity: 1
            }
        }
 
        .chartjs-render-monitor {
            -webkit-animation: chartjs-render-animation 0.001s;
            animation: chartjs-render-animation 0.001s;
        }
    </style>
    <script src="layout/js/main.js">
    </script>
    <script type="text/javascript">
        // Notice how this gets configured before we load Font Awesome
        window.FontAwesomeConfig = {
            autoReplaceSvg: false
        }
    </script>
    <style>
        @import url(../fonts.googleapis.com/css%EF%B9%96family=Roboto%EF%B9%95400.css);
 
        .navbar-nav .dropdown-menu {
            margin: 0 !important
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
