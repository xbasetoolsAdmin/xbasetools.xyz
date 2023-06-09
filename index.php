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
?><!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml"><head>
<link rel="stylesheet" type="text/css" href="files/bootstrap/3/css/bootstrap.css?1" />
<link rel="stylesheet" type="text/css" href="files/css/flags.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" />
<script type="text/javascript" src="files/js/jquery.js?1"></script>
<script type="text/javascript" src="files/bootstrap/3/js/bootstrap.js?1"></script>
<script type="text/javascript" src="files/js/sorttable.js"></script>
<script type="text/javascript" src="files/js/table-head.js?3334"></script>
<script type="text/javascript" src="files/js/bootbox.min.js"></script>
<script type="text/javascript" src="files/js/clipboard.min.js"></script>

<link rel="shortcut icon" href="files/img/favicon.ico" />
<meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" /> 
 <meta name="referrer" content="no-referrer" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="utf-8" />
<title>Main - FeluxShop</title>
<style>
  #table {
    .sortable
  }
  table th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after { 
      content: " \25BE" 
  }

  .label-as-badge {
      border-radius: 0.5em;
  }

  body {
      padding-top:50px;
  }
  table.floatThead-table {
      border-top: none;
      border-bottom: none;
      background-color: #fff;
  }
  @media (min-width: 768px) {
    .dropdown:hover .dropdown-menu {
      display: block;
    }
  }

  #mydiv {
    height: 400px;
    position: relative;
  }
  .ajax-loader {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    margin: auto; /* presto! */

  }

</style><script type="text/javascript">
  function ajaxinfo() {
      $.ajax({
          type: 'GET',
          url: 'ajaxinfo.html',
          timeout: 10000,

          success: function(data) {
              if (data != '01') {
                  var data = JSON.parse(data);
                  for (var prop in data) {
                      $("#" + prop).html(data[prop]).show();
                  }
              } else {
                  window.location = "logout.html";
              }
          }
      });

  }
  setInterval(function() {
      ajaxinfo()
  }, 3000);

  ajaxinfo();

  $(document).keydown(function(event){
      if(event.which=="17")
          cntrlIsPressed = true;
  });

  $(document).keyup(function(){
      cntrlIsPressed = false;
  });

  var cntrlIsPressed = false;


  function pageDiv(n,t,u,x){
    if(cntrlIsPressed){
      window.open(u, '_blank');
      return false;
    }
          var obj = { Title: t, Url: u };
          if ( ("/"+obj.Url) != location.pathname) {
            if (x != 1) {history.pushState(obj, obj.Title, obj.Url);}
            else{history.replaceState(obj, obj.Title, obj.Url);}

        }
        document.title = obj.Title;
      $("#mainDiv").html('&lt;div id="mydiv"&gt;&lt;img src="files/img/load2.gif" class="ajax-loader"&gt;&lt;/div&gt;').show();
      $.ajax({
      type:       'GET',
      url:        'divPage'+n+'.html',
      success:    function(data)
      {
          $("#mainDiv").html(data).show();
          newTableObject = document.getElementById('table');
          sorttable.makeSortable(newTableObject);
          $(".sticky-header").floatThead({top:60});
          if(x==0){ajaxinfo();}
        }});
      if (typeof stopCheckBTC === 'function') { 
      var a = stopCheckBTC();
      }

  }

  $(window).on("popstate", function(e) {
          location.replace(document.location);

  });

  $(window).on('load', function() {
  $('.dropdown').hover(function(){ $('.dropdown-toggle', this).trigger('click'); });
    pageDiv(0,'Main - FeluxShop','index.html',1);
    var clipboard = new Clipboard('.copyit');
      clipboard.on('success', function(e) {
        setTooltip(e.trigger, 'Copied!');
        hideTooltip(e.trigger);
        e.clearSelection();
    });

  });


  function setTooltip(btn, message) {
    console.log("hide-1");
    $(btn).tooltip('hide')
      .attr('data-original-title', message)
      .tooltip('show');
      console.log("show");
  }

  function hideTooltip(btn) {
    setTimeout(function() {$(btn).tooltip('hide'); console.log("hide-2");}, 1000);
  }
</script><style>
        .navbar {
            background-color: #001f3f;
        }
</style><style type="text/css">
<body style="padding-top: 70px; padding-bottom: 70px;">
<nav class="navbar navbar-default navbar-fixed-top ">
  <div class="container-fluid">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
    <div class="navbar-brand" onclick="location.href='index.html'" onmouseover="this.style.cursor='pointer'"><b><span class="glyphicon glyphicon-fire"></span> Xbaseleet <small><span class="glyphicon glyphicon-refresh"></span></small></b></div></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="topFixedNavbar1">
      <ul class="nav navbar-nav">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hosts <span class="glyphicon glyphicon-chevron-down" id="alhosts"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="rdp.html" onclick="pageDiv(1,'RDP - Xbaseleet','rdp.html',0); return false;">RDPs <span class="label label-primary label-as-badge" id="rdp">1</span></a></li>
            <li><a href="cPanel.html" onclick="pageDiv(2,'cPanel - Xbaseleet','cPanel.html',0); return false;">cPanels <span class="label label-primary label-as-badge" id="cpanel">0</span></a></li>
            <li><a href="shell.html" onclick="pageDiv(3,'Shell - Xbaseleet','shell.html',0); return false;">Shells <span class="label label-primary label-as-badge" id="shell">0</span></a></li>  
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Send <span class="glyphicon glyphicon-chevron-down" id="mail"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="mailer.html" onclick="pageDiv(4,'PHP Mailer - Xbaseleet','mailer.html',0); return false;">Mailers <span class="label label-primary label-as-badge" id="mailer">0</span></a></li>
            <li><a href="smtp.html" onclick="pageDiv(5,'SMTP - Xbaseleet','smtp.html',0); return false;">SMTPs <span class="label label-primary label-as-badge" id="smtp">0</span></a></li>  
          </ul>
        </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Leads <span class="glyphicon glyphicon-chevron-down" id="all_leads"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="leads.html" onclick="pageDiv(6,'Leads - Xbaseleet','leads.html',0); return false;">Leads <span class="label label-primary label-as-badge" id="leads">0</span></a></li>
          </ul>
        </li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Accounts <span class="glyphicon glyphicon-chevron-down" id="accounts"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="premium.html" onclick="pageDiv(7,'Premium/Dating/Shop - Xbaseleet','premium.html',0); return false;">Premium/Dating/Shop <span class="label label-primary label-as-badge" id="premium">7</span></a></li>
            <li><a href="banks.html" onclick="pageDiv(8,'Banks - Xbaseleet','banks.html',0); return false;">Banks <span class="label label-primary label-as-badge" id="banks">0</span></a></li>  
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Others <span class="glyphicon glyphicon-chevron-down" id="accounts"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="scampage.html" onclick="pageDiv(9,'Scampages - Xbaseleet','scampage.html',0); return false;">Scampage <span class="label label-primary label-as-badge" id="scams">1</span></a></li>
            <li><a href="tutorial.html" onclick="pageDiv(10,'Tutorials - Xbaseleet','tutorial.html',0); return false;">Tutorial <span class="label label-primary label-as-badge" id="tutorials">2</span></a></li>  
          </ul>
        </li>
                      
      </ul>
      <ul class="nav navbar-nav navbar-right">
                              
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tickets <span id="alltickets">
</span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="tickets.html" onclick="pageDiv(11,'Tickets - Xbaseleet','tickets.html',0); return false;">Tickets <span class="label label-info"><span id="tickets">0</span></span>	</a></li>
            <li><a href="reports.html" onclick="pageDiv(12,'Reports - Xbaseleet','reports.html',0); return false;">Reports <span class="label label-info"><span id="reports">0</span></span>  </a></li>

           </ul>
        </li>

        <li><a href="addBalance.html" onclick="pageDiv(13,'Add Balance - Xbaseleet','addBalance.html',0); return false;"><span class="badge"><b><span id="balance">0</span></b> <span class="glyphicon glyphicon-plus"></span><span> </span></span></a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account  <span class="glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="setting.html" onclick="pageDiv(14,'Setting - Xbaseleet','setting.html',0); return false;">Setting <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
            <li><a href="orders.html" onclick="pageDiv(15,'Orders - Xbaseleet','orders.html',0); return false;">My Orders <span class="glyphicon glyphicon-shopping-cart pull-right"></span></a></li>
            <li><a href="addBalance.html" onclick="pageDiv(13,'Add Balance - Xbaseleet','addBalance.html',0); return false;">Add Balance <span class="glyphicon glyphicon-usd pull-right"></span></a></li>
            
            <li class="divider"></li>
            <li><a href="logout.html">Logout <span class="glyphicon glyphicon-off pull-right"></span></a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<div id="mainDiv">
<div class="form-group col-lg-7 ">
<div class="well">
  Hello <a class="label label-primary">XBASELEET</a><br />
    If you have any <b>Question</b> ,<b>Problem</b>, <b>Suggestion</b> or <b>Request</b> Please feel free to <a class="label label-default " href="tickets.html"><span class="glyphicon glyphicon-pencil"></span> Open a Ticket</a><br />
    if you want to report an order , just go to <abbr title="Account - &gt; My Orders or Click here">My Orders  <span class="glyphicon glyphicon-shopping-cart"></span></abbr> 
    then click on <a class="label label-primary">Report #[Order Id]</a> button<br /><br />
    Our Domains are <b>Felux.shop</b>- Please Save them!

</div>

    <div class="list-group" id="div2">
      	<h3><i class="glyphicon glyphicon-info-sign"></i> News</h3><a class="list-group-item"><h5 class="list-group-item-heading"><b>Bugs Fixed!</b></h5><h6 class="list-group-item-text">2020-03-23 22:29:26</h6></a><a class="list-group-item"><h5 class="list-group-item-heading"><b>New Accounts Addeded</b></h5><h6 class="list-group-item-text">2020-03-23 22:29:14</h6></a><a class="list-group-item"><h5 class="list-group-item-heading"><b>Bugs Updated</b></h5><h6 class="list-group-item-text">2020-03-23 22:28:56</h6></a>

				 </div>

</div>
<div class="form-group col-lg-4 ">
	<!-- <img src="files/img/eid.jpg" style="width: 70%; height: 70%" title="Eid Mubarak"> -->
<iframe src="static.html" style="border:none;" width="400" height="270" scrolling="no">Browser not compatible.</iframe>

    	<div class="well well-sm">    
                  <h4><b>Our Support team is here !</b></h4><a class="btn btn-default btn-sm" onclick="pageDiv(9,'Tickets - FeluxShop','tickets.html#open',0); return false;" href="tickets.html#open"><span class="glyphicon glyphicon-pencil"></span> Open a Ticket</a>
                  <h5><b>Interested in becoming a seller at  Olux Shop ?</b></h5><a class="btn btn-primary btn-xs" href="seller.html" onclick="pageDiv(24,'Become Seller  - FeluxShop','seller.html',0); return false;">Learn more</a>
                  <h5><b>Available Payment Methods </b></h5>

                  <img src="files/img/pmlogo2.png" height="48" width="49" title="PerfectMoney" onclick="pageDiv(11,'Add Balance - FeluxShop','addBalance.html#perfectmoney',0); return false;" href="addBalance.html#perfectmoney" onmouseover="this.style.cursor='pointer'" />
                  <img src="files/img/btclogo.png" height="48" width="49" title="Bitcoin" onclick="pageDiv(11,'Add Balance - FeluxShop','addBalance.html#bitcoin',0); return false;" href="addBalance.html#bitcoin" onmouseover="this.style.cursor='pointer'" />
                 
      </div>
	
                 
      </div>
  
</div>



</body><div style="all: initial;"></div><div class="__chobitsu-hide__ luna-dom-highlighter luna-dom-highlighter-platform-mac"><canvas id="canvas" class="luna-dom-highlighter-fill" width="390" height="664" style="width: 390px; height: 664px;"></canvas><div></div></div></html>