<?php  ob_start(); session_start(); date_default_timezone_set('UTC'); include "../includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: ../");     exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?>
<!DOCTYPE html><html><head><meta charset="UTF-8"> <meta name="viewport" content="width=device-width" />
               
                                     <title> Main </title>
  
<!------------Bootstrap CSS library------------>





<!----------MDBootstrap assets library--------->






<!---------------jquery JS library------------>


    <script src="https://code.jquery-3.5.1.min.js">
</script>


<!---------cdn dataTable css library--------->



<!---------cdn dataTable js library--------->

 
<!---------cdn  js component library--------->

l



<!---------xbasetools text/js library--------->

 
    <!--<script async src="//www.googletagmanager.com/gtag/js?id=UA-177092549-1"></script> <script> --->
       // window.dataLayer = window.dataLayer ||[];
 
       // function gtag() {            dataLayer.push(arguments);        }        gtag('js', new Date());        gtag('set', {            '$usrid': 'USER_ID'        }); // Set the user ID using signed-in user_id.        gtag('config', 'UA-177092549-1');    </script>--->

    <style>
        body {
            padding-top: 80px
        }
    </style>
  
  
  
  
  
  
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
<script>
function o(){$.ajax({type:"GET",url:"ajaxinfo.html",timeout:1e4,success:function(o){if("01"!=o){o=JSON.parse(o);for(var t in o)$("#"+t).html(o[t]).show()}else window.location="logout.html"}})}setInterval((function(){o()}),3e3),o(),$(document).keydown((function(o){"17"==o.which&&(t=!0)})),$(document).keyup((function(){t=!1}));var t=!1;$(window).on("popstate",(function(o){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),function(e,i,n,l){if(t)return window.open(n,"_blank"),!1;var a={Title:i,Url:n};"/"+a.Url!=location.pathname&&(1!=l?history.pushState(a,a.Title,a.Url):history.replaceState(a,a.Title,a.Url)),document.title=a.Title,$("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show(),$.ajax({type:"GET",url:"divPage"+e+".html",success:function(t){$("#mainDiv").html(t).show(),newTableObject=document.getElementById("table"),sorttable.makeSortable(newTableObject),$(".sticky-header").floatThead({top:60}),0==l&&o()}}),"function"==typeof stopCheckBTC&&stopCheckBTC()}(0,"Main - FeluxShop","index.html",1),new Clipboard(".copyit").on("success",(function(o){var t,e;t=o.trigger,e="Copied!",console.log("hide-1"),$(t).tooltip("hide").attr("data-original-title",e).tooltip("show"),console.log("show"),function(o){setTimeout((function(){$(o).tooltip("hide"),console.log("hide-2")}),1e3)}(o.trigger),o.clearSelection()}))}));
</script>
