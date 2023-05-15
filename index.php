<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: login");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>
 <!DOCTYPE html>
<html>
<head>
<script src="/cdn-cgi/apps/head/AGN3NmUziwZfMV-TNTe1kdyeR2Y.js"></script>
	<title>Xbasetools</title>
<link rel="stylesheet" href="main/layout/css/bootstrap.min.css"><script src="https://code.jquery.com/jquery-3.4.1.min.js"></script><script src="main/layout/js/clipboard.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script><script src="main/layout/js/bootstrap.min.js"></script><script src="main/layout/js/bootbox.min.js"></script><link rel="stylesheet" type="text/css" href="main/layout/css/flags.css"><link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"><link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css"><link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css"><script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script><script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script><script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script><script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script><script src="js/jquery.dataTables.min.js"></script><link href="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet"><script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script><link rel="shortcut icon" href="files/img/favicon.ico"><meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE"><meta name="referrer" content="no-referrer"><meta name="viewport" content="width=device-width,initial-scale=1"><meta charset="utf-8"><title>JeruxShop</title><script async src="//www.googletagmanager.com/gtag/js?id=UA-177092549-1"></script><script>function gtag(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag("js",new Date),gtag("set",{$usrid:"USER_ID"}),gtag("config","UA-177092549-1")</script><link rel="stylesheet" href="main/layout/css/all.min.css"><link rel="stylesheet" href="main/layout/css/main.css?v=12.9"><link rel="stylesheet" href="main/layout/css/util.css"><style>body{padding-top:80px}</style><link rel="stylesheet" href="main/layout/fonts/iconic/css/material-design-iconic-font.min.css"><script src="main/layout/js/main.js"></script><script type="text/javascript">window.FontAwesomeConfig={autoReplaceSvg:!1}</script><style>@import url(//fonts.googleapis.com/css?family=Roboto:400);.navbar-nav .dropdown-menu{margin:0!important}</style>
</head>
<head>
    
