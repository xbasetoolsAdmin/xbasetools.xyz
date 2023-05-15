<?php include "../includes/config.php"; ?>
<?php  ob_start(); session_start(); date_default_timezone_set('UTC'); include "../includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {    header("location: ../");     exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?>
	<style>
		.navbar-nav .dropdown-menu {
			margin: 0 !important
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
		
		input:checked+.slider {
			background-color: #2196f3;
		}
		
		input:focus+.slider {
			box-shadow: 0 0 1px #2196f3;
		}
		
		input:checked+.slider:before {
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
		
	</style>
	<script>
		function setTheme ( themeName ) {
			localStorage.setItem( 'theme', themeName );
			document.documentElement.className = themeName;
		}
		
		// function to toggle between light and dark theme
		function toggleTheme ( ) {
			if ( localStorage.getItem( 'theme' ) === 'theme-dark' ) {
				setTheme( 'theme-light' );
			} else {
				setTheme( 'theme-dark' );
			}
		}
		
		// Immediately invoked function to set the theme on initial load
		( function ( ) {
			if ( localStorage.getItem( 'theme' ) === 'theme-dark' ) {
				setTheme( 'theme-dark' );
				document.getElementById( 'slider' ).checked = false;
			} else {
				setTheme( 'theme-light' );
				document.getElementById( 'slider' ).checked = true;
			}
		} )( );
		
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
</head>


<body class="them loading">
	<nav class="navbar navbar-expand-xl navbar  navbar-light " style="
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
						<a class="dropdown-item waves-effect waves-light" href="#" style="color: var(--font-color);">There is no new notifications</a>
					</div>
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
	<style>
		.modal-dialog.modal-frame.modal-top.modal-notify.modal-danger .modal-body,
		.modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger .modal-body {
			padding-top: 35px;
		}
		
		.modal-dialog.modal-frame.modal-top.modal-notify.modal-danger,
		.modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger {
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
		
	</style>
<div class="container">
