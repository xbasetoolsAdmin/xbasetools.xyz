<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "../includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ../");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>



<script>

  function sendt(){

      var sub = $("#subject").val();
      var msg = $("#msg").val();
       $.ajax({
       method:"GET",
       url:"CreateTicket?s="+btoa(sub)+"&m="+btoa(msg),
       dataType:"text",
       success:function(data){
       $("#resulta").html(data).show();
       },
     });
  }

</script><style>.alert-info {
    color: var(--color-info);
    background-color: var(--color-backinfo);
    border-color: var(--color-borderinfo);

}

.badge-dot-xl {
    width: 18px;
    height: 18px;
    position: relative;
}

.badge-dot {
    text-indent: -999em;
    padding: 0;
    width: 8px;
    height: 8px;
    border: transparent solid 1px;
    border-radius: 30px;
    min-width: 2px;
}
.badge1 {
    font-weight: bold;
    text-transform: uppercase;
    padding: 10px 10px;
    min-width: 19px;
}


.badge-dot-xl::before {
    content: '';
    width: 10px;
    height: 10px;
    border-radius: .25rem;
    position: absolute;
    left: 50%;
    top: 50%;
    margin: -5px 0 0 -5px;
    background: #fff;
}
.nav-item-header {
    text-transform: uppercase;
    font-size: .73333rem;
    color: #6c757d;
    font-weight: bold;
    padding: .5rem 1rem;
}
.nav-link {
    display: flex;
    align-items: center;
    transition: background-color 0.3s ease, color 0.3s ease;
    cursor: pointer;
      color: #3f6ad8;
    text-decoration: none;
    background-color: transparent;
}

.nav-link:hover {
    color: #495057;
}
.nav-link-icon:hover {
    opacity: .9;
    color: Dodgerblue;
}

.nav-link-icon {
    color: Dodgerblue;
    font-size: 1rem;
    width: 30px;
    text-align: center;
    opacity: .45;
    margin-left: -10px;
}
.display  td {
    background: var(--color-card);
      color: var(--font-color);

}
.dataTables_wrapper .dataTables_paginate .paginate_button {

    color: <--font-color);

}
#ticket_data_paginate .paginate_button {
color: var(--font-color);

}
#ticket_data_filter{
  color: var(--font-color);
}
#ticket_data_length{
  color: var(--font-color);
}
#ticket_data_paginate{
  color: var(--font-color);
}
#ticket_data_info{
  color: var(--font-color);
}
</style><style>.navbar-nav .dropdown-menu
    {
      margin:0 !important
    }
    .theme-light {
  --color-primary: #0060df;
  --color-secondary: #ffffff;
   --color-secondary2: #ecf0f1;
  --color-accent: #fd6f53;
  --font-color: #000000;
  --color-nav: #ffffff;
  --color-dropdown: #ffffff;
  --color-card: #ffffff;
   --color-card2: #d1ecf1;
  --color-info: #0c5460;
  --color-backinfo: #d1ecf1;
  --color-borderinfo: #bee5eb;

}
.theme-dark {
  --color-primary: #17ed90;
  --color-secondary: #353B50;
  --color-secondary2: #353B50;
  --color-accent: #12cdea;
  --font-color: #ffffff;
  --color-nav: #363947;
  --color-dropdown: rgba(171, 205, 239, 0.3);
  --color-card: #262A37;
   --color-card2: #262A37;
   --color-info: #4DD0E1;
  --color-backinfo: #262A37;
  --color-borderinfo: #262A37;
}
.them {

  background: var(--color-secondary);
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.them h1 {
  color: var(--font-color);
  font-family: sans-serif;
}
.card-body {
     color: var(--font-color);
    }
.them button {
  color: var(--font-color);
  background-color: #ffffff;
  padding: 10px 20px;
  border: 0;
  border-radius: 5px;
}
.navbar.navbar-light .navbar-toggler {
    color: var(--font-color);
}

/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 40px;
  width: 40px;
  left: 0px;
  bottom: 4px;
  top: 0;
  bottom: 0;
  margin: auto 0;
  -webkit-transition: 0.4s;
  transition: 0.4s;
  box-shadow: 0 0px 15px #2020203d;
  background: white url('../i.ibb.co/FxzBYR9/night.png');
  background-repeat: no-repeat;
  background-position: center;
}

input:checked + .slider {
  background-color: #2196f3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196f3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(24px);
  -ms-transform: translateX(24px);
  transform: translateX(24px);
  background: white url('../i.ibb.co/7JfqXxB/sunny.png');
  background-repeat: no-repeat;
  background-position: center;
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

  </style><script>

        function setTheme(themeName) {
            localStorage.setItem('theme', themeName);
            document.documentElement.className = themeName;
        }

        // function to toggle between light and dark theme
        function toggleTheme() {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-light');
            } else {
                setTheme('theme-dark');
            }
        }

        // Immediately invoked function to set the theme on initial load
        (function () {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-dark');
                document.getElementById('slider').checked = false;
            } else {
                setTheme('theme-light');
              document.getElementById('slider').checked = true;
            }
        })();

  </script></head>




<body class="them"><nav class="navbar navbar-expand-xl navbar  navbar-light " style="
                                                          position:fixed;
                                                          background-color: var(--color-nav);
                                                          z-index:1;
                                                          top:0;
                                                          left:0;
                                                          right:0;
                                                          line-height: 1.5;
                                                          font-family: 'Lato', sans-serif;
                                                          font-size: 15px;
                                                          padding-top: 0.5rem;
                                                          padding-right: 1rem;
                                                          padding-bottom: 0.5rem;
                                                          padding-left: 1rem;
                                                        ">
<a class="navbar-brand" href="main.html" style="color: var(--font-color);"><img width="40px" src="layout/images/logo.png"> Odin</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<i class="navbar-toggler-icon"></i>
</button>
<div class="collapse navbar-collapse order-1" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">

<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle waves-effect waves-light" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-warehouse fa-sm orange-text"></i>
Hosts
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item waves-effect waves-light" href="rdp.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> RDPs <span class="badge badge-primary">76</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="cPanel.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> cPanels <span class="badge badge-primary">15489</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="shell.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> Shells <span class="badge badge-primary">919</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="ssh.html" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> SSH/WHM <span class="badge badge-primary">135</span></span></a>
</div>
</li>

<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle waves-effect waves-light" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-leaf fa-fw fa-sm text-success" style="margin-right: 4px;"></i>Premium</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item waves-effect waves-light" href="premium_shell.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Premium Shells <span class="badge badge-primary">881</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="premium_cPanel.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Premium cPanels <span class="badge badge-primary">6014</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="premium_downloads.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Premium Downloads <span class="badge badge-primary">8</span></span></a>
</div>
</li>

<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle waves-effect waves-light" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-google-play fa-sm text-success"></i>
Send
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item waves-effect waves-light" href="mailer.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Mailers <span class="badge badge-primary">488</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="smtp.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i> SMTPs <span class="badge badge-primary">2291</span></span></a>
</div>
</li>


<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle waves-effect waves-light" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-mail-bulk fa-sm pink-color"></i> Leads
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item waves-effect waves-light" href="leads-5.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> 100% Validated Leads <span class="badge badge-primary">0</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="leads-1.html" style="color: var(--font-color);"><span class="px-2"><i class="fa fa-fire orange-color"></i> Email Only <span class="badge badge-primary">163</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="leads-2.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-passport"></i> Combo Email:Password <span class="badge badge-primary">24</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="leads-3.html" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-battle-net"></i> Combo Username:Password <span class="badge badge-primary">1</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="leads-4.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-at"></i> Email Access <span class="badge badge-primary">22</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="leads-6.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-mobile-alt"></i> Phone Number Only <span class="badge badge-primary">31</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="leads-7.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-phone-square"></i> Combo Phone:Password <span class="badge badge-primary">3</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="leads-8.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-inbox"></i> Full Data <span class="badge badge-primary">0</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="leads-9.html" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-facebook"></i> Social Media Data <span class="badge badge-primary">0</span></span></a>
</div>
</li>


<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle waves-effect waves-light" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-tie fa-sm"></i> Business
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item waves-effect waves-light" href="business-1.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-business-time"></i> cPanel Webmail <span class="badge badge-primary">6215</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="business-2.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-mail-bulk"></i> Godaddy Webmail <span class="badge badge-primary">2246</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="business-3.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-globe"></i> Office365 Webmail <span class="badge badge-primary">10010</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="business-4.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope-open-text"></i> Rackspace Webmail <span class="badge badge-primary">1822</span></span></a>
</div>
</li>


<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle waves-effect waves-light" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-friends fa-sm"></i> Accounts
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item waves-effect waves-light" href="accounts-1.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-comments-dollar"></i> Marketing <span class="badge badge-primary">99</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="accounts-2.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-server"></i> Hosting / Domain <span class="badge badge-primary">6</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="accounts-3.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-gamepad"></i> Games <span class="badge badge-primary">18</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="accounts-4.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-cubes"></i> VPN/Socks Proxy&gt;Email Access <span class="badge badge-primary">1190</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="accounts-5.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-shopping-cart"></i> Shopping{Amazon, Ebay, ...} <span class="badge badge-primary">94</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="accounts-6.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-ethernet"></i> Programs {Antivirus, Adobe, ...} <span class="badge badge-primary">0</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="accounts-7.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-stream"></i> Stream {Netflix,HBO, ... } <span class="badge badge-primary">124</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="accounts-8.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-user-plus"></i> Dating <span class="badge badge-primary">87</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="accounts-9.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-graduation-cap"></i> Learning{ Udacity, Udemy, Lynda, ... } <span class="badge badge-primary">14</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="accounts-10.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-window-restore"></i> Torrent / File Host <span class="badge badge-primary">3</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="accounts-11.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-phone-volume"></i> Voip / Sip <span class="badge badge-primary">0</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="accounts-12.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-network-wired"></i> Other <span class="badge badge-primary">3</span></span></a>
</div>
</li>


<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle waves-effect waves-light" role="button" style="color: var(--font-color);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-drupal text-primary fa-sm"></i> Requests
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item waves-effect waves-light" href="requests.html" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-user-plus"></i> Buyers Requests <span class="badge badge-primary"> 83</span></span></a>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link waves-effect waves-light" href="offers.html" style="color: var(--font-color);"><i class="fas fa-user-secret text-primary fa-sm"></i> Bulk Offers</a>
</li>
</ul>

<ul class="navbar-nav profile">

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle waves-effect waves-light" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell text-danger"></i> <span class="badge badge-success">0</span></a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
<a class="dropdown-item waves-effect waves-light" href="#" style="color: var(--font-color);">There is no new notifications</a> </div>
</li>

<li class="nav-item">
<a class="nav-link waves-effect waves-light" href="addBalance.html" style="color: var(--font-color);" role="button" aria-haspopup="true" aria-expanded="false"><span class="badge badge-danger">
0
<span class="px-2"><i class="fa fa-plus"></i></span></span>
</a>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle waves-effect waves-light" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Ticket <span class="badge badge-success">0</span></a>

<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
<a class="dropdown-item waves-effect waves-light" href="orders.html" style="color: var(--font-color);"><span class="px-2">Report Items</span></a>
<a class="dropdown-item waves-effect waves-light" href="tickets.html" style="color: var(--font-color);"><span class="px-2">My Tickets <span class="badge badge-success">0</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="reports.html" style="color: var(--font-color);"><span class="px-2">My Reports <span class="badge badge-success">0</span></span></a>
<a class="dropdown-item waves-effect waves-light" href="OpenTicket.html" style="color: var(--font-color);"><span class="px-2">New Ticket</span></a>
</div>
</li>


<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle waves-effect waves-light" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> XBASELEET <i class="fa fa-user-secret" style="color: var(--font-color);"></i></a>

<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
<a class="dropdown-item waves-effect waves-light" href="setting.html" style="color: var(--font-color);"><span class="px-2">Setting <i class="fa fa-cog"></i></span></a>
<a class="dropdown-item waves-effect waves-light" href="seller-profile.html" style="color: var(--font-color);"><span class="px-2">Profile <i class="fa fa-user"></i></span></a>
<a class="dropdown-item waves-effect waves-light" href="orders.html" style="color: var(--font-color);"><span class="px-2">My Orders <i class="fa fa-shopping-cart"></i></span></a>
<a class="dropdown-item waves-effect waves-light" href="addBalance.html" style="color: var(--font-color);"><span class="px-2">Add Balance <i class="fa fa-money-bill-alt"></i></span></a>
<a class="dropdown-item waves-effect waves-light" href="login.html" style="color: var(--font-color);"><span class="px-2">Logout <i class="fa fa-door-open"></i></span></a>
</div>
</li>

</ul>

</div>
</nav>
<style>.modal-dialog.modal-frame.modal-top.modal-notify.modal-danger .modal-body,.modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger .modal-body{
	    padding-top: 35px;
}
.modal-dialog.modal-frame.modal-top.modal-notify.modal-danger,.modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger {
    max-width: 500px !important;
    margin: 1.75rem auto !important;
    position: relative;
    width: auto !important;
    pointer-events: none;
}
a.closearb {
    position: absolute;
    top: 2.5px;
    right: 2.5px;
    display: block;
    width: 30px;
    height: 30px;
    text-indent: -9999px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAA3hJREFUaAXlm8+K00Acx7MiCIJH/yw+gA9g25O49SL4AO3Bp1jw5NvktC+wF88qevK4BU97EmzxUBCEolK/n5gp3W6TTJPfpNPNF37MNsl85/vN/DaTmU6PknC4K+pniqeKJ3k8UnkvDxXJzzy+q/yaxxeVHxW/FNHjgRSeKt4rFoplzaAuHHDBGR2eS9G54reirsmienDCTRt7xwsp+KAoEmt9nLaGitZxrBbPFNaGfPloGw2t4JVamSt8xYW6Dg1oCYo3Yv+rCGViV160oMkcd8SYKnYV1Nb1aEOjCe6L5ZOiLfF120EjWhuBu3YIZt1NQmujnk5F4MgOpURzLfAwOBSTmzp3fpDxuI/pabxpqOoz2r2HLAb0GMbZKlNV5/Hg9XJypguryA7lPF5KMdTZQzHjqxNPhWhzIuAruOl1eNqKEx1tSh5rfbxdw7mOxCq4qS68ZTjKS1YVvilu559vWvFHhh4rZrdyZ69Vmpgdj8fJbDZLJpNJ0uv1cnr/gjrUhQMuI+ANjyuwftQ0bbL6Erp0mM/ny8Fg4M3LtdRxgMtKl3jwmIHVxYXChFy94/Rmpa/pTbNUhstKV+4Rr8lLQ9KlUvJKLyG8yvQ2s9SBy1Jb7jV5a0yapfF6apaZLjLLcWtd4sNrmJUMHyM+1xibTjH82Zh01TNlhsrOhdKTe00uAzZQmN6+KW+sDa/JD2PSVQ873m29yf+1Q9VDzfEYlHi1G5LKBBWZbtEsHbFwb1oYDwr1ZiF/2bnCSg1OBE/pfr9/bWx26UxJL3ONPISOLKUvQza0LZUxSKyjpdTGa/vDEr25rddbMM0Q3O6Lx3rqFvU+x6UrRKQY7tyrZecmD9FODy8uLizTmilwNj0kraNcAJhOp5aGVwsAGD5VmJBrWWbJSgWT9zrzWepQF47RaGSiKfeGx6Szi3gzmX/HHbihwBser4B9UJYpFBNX4R6vTn3VQnez0SymnrHQMsRYGTr1dSk34ljRqS/EMd2pLQ8YBp3a1PLfcqCpo8gtHkZFHKkTX6fs3MY0blKnth66rKCnU0VRGu37ONrQaA4eZDFtWAu2fXj9zjFkxTBOo8F7t926gTp/83Kyzzcy2kZD6xiqxTYnHLRFm3vHiRSwNSjkz3hoIzo8lCKWUlg/YtGs7tObunDAZfpDLbfEI15zsEIY3U/x/gHHc/G1zltnAgAAAABJRU5ErkJggg==);
}
</style><style>.them button {
    color: var(--font-color);
    background-color: var(--color-card);
    padding: 10px 20px;
    border: 0;
    border-radius: 5px;
}
.them button:hover{
    color: var(--font-color);
    background-color: var(--color-card);

}
.badge-success {
    color: var(--color-card);
    background-color: #00c851 !important;
}
.badge-danger {
    color: var(--color-card);
    background-color: #ff3547 !important;
}
</style>

<div class="d-flex flex-row-reverse mt-0">
<div class="p-2"><label id="switch" class="switch">
<input type="checkbox" onchange="toggleTheme()" id="slider">
<span class="slider round"></span>
</label></div>
</div>
<div class="p-5">
<div class="row">
<div class="col-lg-3 col-md-4 mb-3">
<div class="card" style="color: var(--font-color); background-color: var(--color-card);">
<ul class="nav flex-column">
<li class="pt-4 pl-3 pr-3 pb-3 nav-item">
<a href="OpenTicket.html" class="btn btn-shadow btn-primary btn-lg btn-block waves-effect waves-light">Open New Ticket</a>
</li>
<li class="nav-item-header nav-item">Support Links</li>
<li class="nav-item"><a href="tickets.html" class="nav-link"><i class="far fa-comment-alt nav-link-icon mr-2"></i><span>My Tickets</span>
</a></li>
<li class="nav-item"><a href="reports.html" class="nav-link"><i class="far fa-envelope nav-link-icon mr-2"></i><span>My Reports</span></a></li>

<li class="nav-item-divider nav-item"></li>
<li class="nav-item-header nav-item">Tickets Tags
</li>
<li class="nav-item">
<button type="button" tabindex="0" class="d-flex align-items-center dropdown-item">
<div class="badge badge1 ml-0 mr-3 badge-dot badge-dot-xl badge-success">Open</div>
Open
</button>
<button type="button" tabindex="0" class="d-flex align-items-center dropdown-item">
<div class="badge badge1 ml-0 mr-3 badge-dot badge-dot-xl badge-warning">Answered</div>
Replay
</button>
<button type="button" tabindex="0" class="d-flex align-items-center dropdown-item">
<div class="badge badge1 ml-0 mr-3 badge-dot badge-dot-xl badge-danger">closed</div>
closed
</button>
</li>
</ul>
</div>
</div>
<div class="col-md-8 mb-3 card" style="color: var(--font-color); background-color: var(--color-card);">
<div style="color: var(--font-color); background-color: var(--color-card);">
<br>
<div class="row" style="color: var(--font-color); background-color: var(--color-card);">
<div class="col-md-12" style="color: var(--font-color); background-color: var(--color-card);">
<div id="ticket_data_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="ticket_data_length"><label>Show <select name="ticket_data_length" aria-controls="ticket_data" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="500">500</option></select> entries</label></div><div id="ticket_data_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="ticket_data"></label></div><div id="ticket_data_processing" class="dataTables_processing" style="display: none;">Processing...</div><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 300px; padding-right: 0px;"><table class="display responsive table-hover dataTable no-footer" style="width: 300px; color: var(--font-color); background-color: var(--color-card); margin-left: 0px;" role="grid"><thead>
<tr role="row"><th class="sorting" tabindex="0" aria-controls="ticket_data" rowspan="1" colspan="1" style="width: 14px;" aria-label="ID: activate to sort column ascending">ID</th><th class="sorting" tabindex="0" aria-controls="ticket_data" rowspan="1" colspan="1" style="width: 28.984375px;" aria-label="Title: activate to sort column ascending">Title</th><th class="sorting" tabindex="0" aria-controls="ticket_data" rowspan="1" colspan="1" style="width: 43px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="ticket_data" rowspan="1" colspan="1" style="width: 70.046875px;" aria-label="Last Updated: activate to sort column ascending">Last Updated</th><th class="sorting" tabindex="0" aria-controls="ticket_data" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="View: activate to sort column ascending">View</th><th class="sorting" tabindex="0" aria-controls="ticket_data" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Last Reply: activate to sort column ascending">Last Reply</th><th class="sorting" tabindex="0" aria-controls="ticket_data" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Date Created: activate to sort column ascending">Date Created</th></tr>
</thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table id="ticket_data" class="display responsive table-hover dataTable no-footer dtr-inline collapsed" style="width: 100%; color: var(--font-color); background-color: var(--color-card);" role="grid" aria-describedby="ticket_data_info"><thead>
<tr role="row" style="height: 0px;"><th class="sorting" aria-controls="ticket_data" rowspan="1" colspan="1" style="width: 14px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="ID: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">ID</div></th><th class="sorting" aria-controls="ticket_data" rowspan="1" colspan="1" style="width: 28.984375px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Title: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Title</div></th><th class="sorting" aria-controls="ticket_data" rowspan="1" colspan="1" style="width: 43px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Status: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Status</div></th><th class="sorting" aria-controls="ticket_data" rowspan="1" colspan="1" style="width: 70.046875px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Last Updated: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Last Updated</div></th><th class="sorting" aria-controls="ticket_data" rowspan="1" colspan="1" style="width: 0px; display: none; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="View: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">View</div></th><th class="sorting" aria-controls="ticket_data" rowspan="1" colspan="1" style="width: 0px; display: none; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Last Reply: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Last Reply</div></th><th class="sorting" aria-controls="ticket_data" rowspan="1" colspan="1" style="width: 0px; display: none; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Date Created: activate to sort column ascending"><div class="dataTables_sizing" style="height:0;overflow:hidden;">Date Created</div></th></tr>
</thead>

<tbody><tr class="odd"><td valign="top" colspan="4" class="dataTables_empty">No data available in table</td></tr></tbody></table></div></div><div class="dataTables_info" id="ticket_data_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div><div class="dataTables_paginate paging_simple_numbers" id="ticket_data_paginate"><a class="paginate_button previous disabled" aria-controls="ticket_data" data-dt-idx="0" tabindex="0" id="ticket_data_previous">Previous</a><span></span><a class="paginate_button next disabled" aria-controls="ticket_data" data-dt-idx="1" tabindex="0" id="ticket_data_next">Next</a></div></div>
</div>
</div>
</div>
</div>
</div>
</div>


<script>

    $(document).ready(function(){
        $('#ticket_data').DataTable({
            "processing": true,
            "serverSide": true,
            "responsive": true,
             "scrollX": true,
            "order": [],
            "columnDefs": [
                        {
                            "targets": [ 0 ],
                            "visible": false
                        }
                    ],

            "fnCreatedRow": function( nRow, aData, iDataIndex ) {
                $(nRow).attr('data-ticket-id', aData[1]);
            },

            "ajax":{
                url:"divPage11.html",
                type:"POST"
            },

            "pageLength": 500
        });


    });

    function showticket(id){

         window.location = 'showTicket'+id + ".html" ;

        }

</script>

<div class="hiddendiv common"></div></body></html>