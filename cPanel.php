<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ../");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="files/bootstrap/3/css/bootstrap.css?1" />
<link rel="stylesheet" type="text/css" href="files/css/flags.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
<script type="text/javascript" src="files/js/jquery.js?1"></script>
<script type="text/javascript" src="files/bootstrap/3/js/bootstrap.js?1"></script>
<script type="text/javascript" src="files/js/sorttable.js"></script>
<script type="text/javascript" src="files/js/table-head.js?3334"></script>
<script type="text/javascript" src="files/js/bootbox.min.js"></script>
<script type="text/javascript" src="files/js/clipboard.min.js"></script>

<link rel="shortcut icon" href="files/img/favicon.ico" />
<meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" /> 
 <meta name="referrer" content="no-referrer" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<title>JeruxShop</title>
</head>
<style>





   
    

</style>

<script type="text/javascript">
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
    $("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show();
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
   pageDiv(2,'cPanel - JeruxShop','cPanel.html',1);
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
</script>

<div id="mainDiv">


</div>
</body>
</html>

