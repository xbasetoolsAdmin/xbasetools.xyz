<?php 

include "header.php";

?>


<script>script.js</script>

<?php 
include "navbar_header.php";
?>
 

	<style>
		.scroll-area-lg {
			height: 400px;
			overflow-x: hidden;
		}
		
		.scrollbar-sidebar,
		.scrollbar-container {
			position: relative;
			height: 100%;
		}
		
		.ps {
			overflow: hidden !important;
			overflow-anchor: none;
			touch-action: auto;
		}
		
		.heading {
			font-size: 16px;
			font-weight: bold;
		}
		
		.fa-plus-circle {
			color: green;
		}
		
		#tour {
			font-family: 'Raleway', sans-serif;
		}
		
	</style>
	
	<link rel="stylesheet" href="layout/css/flexslider5.css" type="text/css">
	<script src="layout/js/jquery.flexslider-min.js"></script>
	<style>
		#tour {
			font-family: 'Raleway', sans-serif;
		}
		
		#tour .flexslider {
			margin: 0 0 60px;
			background: #fff;
			border: 0px solid #fff;
			position: relative;
			zoom: 0;
			-webkit-border-radius: 0px;
			-moz-border-radius: 0px;
			border-radius: 0px;
			-webkit-box-shadow: ''0 0px 0px rgba(0, 0, 0, 0.2);
			-moz-box-shadow: ''0 0px 0px rgba(0, 0, 0, 0.2);
			-o-box-shadow: ''0 0px 0px rgba(0, 0, 0, 0.2);
			box-shadow: ''0 0px 0px rgba(0, 0, 0, 0.2);
		}
		
		
		
		#tour .flex-control-paging li a {
			width: 11px;
			height: 11px;
			display: block;
			background: #fff !important;
			border: 1px solid #3c8dbc;
			background: rgba(0, 0, 0, 0.5);
			cursor: pointer;
			text-indent: -9999px;
			-webkit-box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
			-moz-box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
			-o-box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
			box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
			-webkit-border-radius: 20px;
			-moz-border-radius: 20px;
			border-radius: 20px;
		}
		
		#tour .flex-control-paging li a.flex-active {
			background: #3c8dbc !important;
		}
		
		#tour .modal-body {
			padding: 0px;
		}
		
		#tour .modal-footer {
			background: #fafafa;
			border: 0px;
		}
		
		#tour .flex-caption {
			padding: 20px 100px 20px 100px;
			text-align: center;
		}
		
		#tour .flex-caption .heading {
			font-weight: 600;
			font-size: 20px;
			color: #505050;
			padding-bottom: 15px;
		}
		
		#tour .flex-caption .caption-content {
			font-size: 15px;
			color: #505050;
		}
		
	</style>
	
	<div class="modal fade top" id="mod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
		<div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">
			
			<div class="modal-content">
				
				<div class="modal-body">
					<div id="bodyTicket" class="row d-flex justify-content-center align-items-center">
						<span class="pt-3 mx-4" style="font-size: 14 px"><b>You have new replay ticket</b></span><b>
							<a type="button" href="tickets.html" class="btn btn-success waves-effect waves-light">Show tickets
							</a>
						</b>
					</div><b>
					</b>
				</div><b>
				</b>
			</div><b>
			
			</b>
		</div><b>
		</b>
	</div><b>
	
	
		<div class="modal fade top" id="modalrep" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
			<div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">
				
				<div class="modal-content">
					
					<div class="modal-body">
						<div id="bodyreport" class="row d-flex justify-content-center align-items-center">
							<span class="pt-3 mx-4" style="font-size: 14 px"><b>You have new replay report</b></span><b>
								<a type="button" href="reports.html" class="btn btn-danger waves-effect waves-light">Show reports
								</a>
							</b>
						</div><b>
						</b>
					</div><b>
					</b>
				</div><b>
				
				</b>
			</div><b>
			</b>
		</div><b>
		
		
			<div class="modal fade top" id="modalreps" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
				<div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">
					
					<div class="modal-content">
						
						<div class="modal-body">
							<div id="bodyreport" class="row d-flex justify-content-center align-items-center">
								<span class="pt-3 mx-4" style="font-size: 14 px"><b>You have new report</b></span><b>
									<a type="button" href="login.html" class="btn btn-danger waves-effect waves-light">Show reports
									</a>
								</b>
							</div><b>
							</b>
						</div><b>
						</b>
					</div><b>
					
					</b>
				</div><b>
				</b>
			</div><b>
			
			
			
				<div class="modal fade top" id="modalrepss" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
					<div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">
						
						<div class="modal-content">
							
							<div class="modal-body">
								<div id="bodyreport" class="row d-flex justify-content-center align-items-center">
									<span class="pt-3 mx-4" style="font-size: 14 px"><b>You have new replay report</b></span><b>
										<a type="button" href="login.html" class="btn btn-danger waves-effect waves-light">Show reports
										</a>
									</b>
								</div><b>
								</b>
							</div><b>
							</b>
						</div><b>
						
						</b>
					</div><b>
					</b>
				</div><b>
				
					<div class="d-flex flex-row-reverse mt-0" style="z-index: 999999;position: absolute; right: 0; ">
						<div class="p-2"><label id="switch" class="switch">
								<input type="checkbox" onchange="toggleTheme()" id="slider">
								<span class="slider round"></span>
							</label></div>
					</div>
					<script defer="" src="layout/js/jquery.flexslider.js"></script>
					<div class="header">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-3 col-md-6 col-sm-12" style="text-align:center;"><a href="shell.html"><img style="border: 3px solid;" src="layout/images/shells.gif"></a></div>
								<div class="col-lg-3 col-md-6 col-sm-12" style="text-align:center;"><a href="smtp.html"><img style="border: 3px solid;" src="layout/images/smtps.gif"></a></div>
								<div class="col-lg-3 col-md-6 col-sm-12" style="text-align:center;"><a href="accounts-7.html"><img style="border: 3px solid;" src="layout/images/accs.gif"></a></div>
							</div><br>
							<div class="header-body">
								
								<div class="row">
									<div class="col-md-3 col-sm-6">
										<div class="card card-stats">
											<div class="card-body">
												<div class="row">
													<div class="col-md-10">
														<h5 class="card-title text-uppercase text-muted mb-0">Balance</h5>
														<span class="h2 font-weight-bold mb-0">
															0 </span>
													</div>
													<div class="col-md-2">
														<div class="icon icon-shape bg-danger text-white rounded-circle shadow">
															<i class="fa fa-money-bill-alt "></i>
														</div>
													</div>
												</div>
												<p class="mt-3 mb-0 text-muted text-sm">
													<span class="text-nowrap"><a href="addBalance.html"> [Add Funds] </a></span>
												</p>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="card card-stats">
											<div class="card-body">
												<div class="row">
													<div class="col-md-10">
														<h5 class="card-title text-uppercase text-muted mb-0">Orders</h5>
														<span class="h2 font-weight-bold mb-0">0 </span>
													</div>
													<div class="col-md-2">
														<div class="icon icon-shape bg-info text-white rounded-circle shadow">
															<i class="fa fa-shopping-cart"></i>
														</div>
													</div>
												</div>
												<p class="mt-3 mb-0 text-muted text-sm">
													<span class="text-nowrap"><a href="orders.html"> [ Show ] </a></span>
												</p>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="card card-stats">
											<div class="card-body">
												<div class="row">
													<div class="col-md-10">
														<h5 class="card-title text-uppercase text-muted mb-0">Tickets</h5>
														<span class="h2 font-weight-bold mb-0">0 </span>
													</div>
													<div class="col-md-2">
														<div class="icon icon-shape bg-warning text-white rounded-circle shadow">
															<i class="fa fa-cog"></i>
														</div>
													</div>
												</div>
												<p class="mt-3 mb-0 text-muted text-sm">
													<span class="text-nowrap"><a href="tickets.html"> [ Show ]</a></span>
												</p>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="card card-stats" style="background-color: #fb3!important;">
											<div class="card-body">
												<div class="row">
													<div class="col-md-10">
														<h5 class="card-title text-uppercase text-muted mb-0">Reports</h5>
														<span class="h2 font-weight-bold mb-0">
															0 <span>
															</span></span>
													</div>
													<div class="col-md-2">
														<div class="icon icon-shape bg-danger text-white rounded-circle shadow">
															<i class="fas fa-receipt"></i>
														</div>
													</div>
												</div>
												<p class="mt-3 mb-0 text-muted text-sm">
													<span class="text-nowrap"><a href="reports.html"> [ Show ]</a></span>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
							<div class="main-home mt-5 mb-5">
								<div class="row">
									<div class="col-md-8">
										<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
											<div class="card-header">
												<i class="fas fa-user-shield"></i>
												Welcome <a class="badge badge-pill badge-success">XBASELEET</a><br>
											</div>
											<div class="card-body" style="color: var(--font-color); background-color: var(--color-card);">
												<br>
												If you have any Question ,Problem, Suggestion or Request Please feel free to Open a
												<a href="tickets.html" class="btn btn-success btn-sm waves-effect waves-light"> New Ticket <i class="fa fa-paper-plane"></i></a>
												<br>
												if you want to report an order , just go to <a class="btn btn-success btn-sm waves-effect waves-light" data-title="My Orders" href="orders.html"> My Orders <i class="fa fa-shopping-cart"></i></a> then click on Report #[Order Id] button.
												<br>
												Our Domains are <p><span style="color: #ff0000;"><strong>odinshop.io</strong> || <strong>odin.pw</strong> || <strong>odinshop.se</strong> || <strong>odin.pm</strong> ||</span><strong><span style="color: #ff0000;">Tor Mirror odinshoyi3y5clejn3klyggxrmq5sy5efdiremz353z6ucdujgdiccad.onion ||</span> </strong></p> - Please Save them!
												<br>
												<a href="login.html" data-title="Terms Of Service " class="btn btn-primary btn-sm waves-effect waves-light"> Terms Of Service <i class="fa fa-newspaper-o"></i></a>
												<br>
											</div>
										</div>
										<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
											<div class="card-header">
												<i class="fas fa-users"></i>
												Invite Users<br>
											</div>
											<div class="card-body" style="color: var(--font-color); background-color: var(--color-card);">
												<div class="row">
													<div class="col-lg-5 col-md-6 col-sm-12">
														<div class="input-group mb-3" style="align-items: center;">
															<input type="text" class="form-control form-control-lg" id="code_user" value="https://odinshop.io/?referral=20038" disabled="">
															<div class="input-group-append">
																<button class="btn btn-outline-secondary copydiv waves-effect waves-light" data-clipboard-text="https://odinshop.io/?referral=20038" type="button">COPY</button>
															</div>
														</div>
													</div>
													<div class="col-lg-4 col-md-6 col-sm-12 mb-3" style=" align-items: center; display: flex; ">
														<p style=" color: #000; font-size: 18px; font-weight: bold; ">Total Bonus :- </p>
													</div>
													<div class="col-lg-3 col-md-6 col-sm-12 mb-3" style=" align-items: center; display: flex; ">
														<p style=" color: #000; font-size: 18px; font-weight: bold; ">Total Referrals :- 0</p>
													</div>
												</div>
											</div>
										</div>
										<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
											<div class="card-header">
												<i class="fas fa-newspaper"></i>
												Our News
											</div>
											<div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
												<ul>
													<li class="mb-2"><span class="btn btn-info btn-sm mr-2 mt-1 mb-1 waves-effect waves-light"><b>News buyer</b></span><span><small><b>2023/03/01 05:13:01</b></small></span>
														<br>New Premium Section Available Best for SEO Users , now you have the Ability to see the full domain and server info before purchase + many more Features Check it out in the premium section , More Features will be added to it soon
														<br>
													</li>
													<li class="mb-2"><span class="btn btn-info btn-sm mr-2 mt-1 mb-1 waves-effect waves-light"><b>News buyer</b></span><span><small><b>2022/08/24 06:56:08</b></small></span>
														<br>We are currently working to improve the checkers in all sections ,, stay tuned good things are coming.
														<br>
													</li>
													<li class="mb-2"><span class="btn btn-info btn-sm mr-2 mt-1 mb-1 waves-effect waves-light"><b>New section</b></span><span><small><b>2022/08/02 09:30:54</b></small></span>
														<br>Bulk Offers Section has been activated ,, you can buy bulk tools with cheap prices 50% Off, Visit our new section and enjoy the sellers offers.
														https://odinshop.io/offers
														<br>
													</li>
													<li class="mb-2"><span class="btn btn-info btn-sm mr-2 mt-1 mb-1 waves-effect waves-light"><b>Report time</b></span><span><small><b>2022/07/29 01:18:06</b></small></span>
														<br>Dear Buyers
														report/refund time increased to 12hours to give our buyers time to report their bad items, also please rate your purchases to help other buyers and help us to flag the bad sellers and remove them from our platform
														we are here to serve you ,If you have any questions , please don't hesitate to contact us if you have any problem with one of our sellers message us.
														<br>
													</li>
													<li class="mb-2"><span class="btn btn-info btn-sm mr-2 mt-1 mb-1 waves-effect waves-light"><b>Seller apply</b></span><span><small><b>2022/02/03 07:07:04</b></small></span>
														<br>now you can upgrade your account to seller status and start selling with us instantly without support tickets,,for more information visit https://odinshop.io/become-seller
														<br>
													</li>
													<li class="mb-2"><span class="btn btn-info btn-sm mr-2 mt-1 mb-1 waves-effect waves-light"><b>Requests</b></span><span><small><b>2021/11/20 08:39:24</b></small></span>
														<br>Odin's offers you the peace of mind you need to make any purchase. We’ll not release the funds to the Seller until you have received the item and are satisfied with the transaction. We also make sure the Seller provides the required information for the transaction.
														<br>
													</li>
													<li class="mb-2"><span class="btn btn-info btn-sm mr-2 mt-1 mb-1 waves-effect waves-light"><b>Update</b></span><span><small><b>2021/11/06 08:43:23</b></small></span>
														<br>Now you can rate \ review \ comment about the item you've purchased go to MyOrders or Report Items and choose Rate Seller and submit your comment / rate ,, rating will help other clients to easily find the good sellers you can also check the seller's profile by clicking on seller's number button in blue color inside of sections
														<br>
													</li>
													<li class="mb-2"><span class="btn btn-info btn-sm mr-2 mt-1 mb-1 waves-effect waves-light"><b>Update</b></span><span><small><b>2021/08/03 07:52:03</b></small></span>
														<br>CMS / Technology detectors installed in cPanel &amp; Shell sections to extract the platform [ Wordpress - Joomla - Drupal - WooCommerce - etc.. ] and extract back side technologies such as [ Laravel - Codeigniter - Yii - Zend - Vue JS - React Js - etc.. ] plus extract Server Technologies such as [ Apache - Nginx - MySQL - Tomcat - etc..] and more updates coming soon.
														<br>
													</li>
													<li class="mb-2"><span class="btn btn-info btn-sm mr-2 mt-1 mb-1 waves-effect waves-light"><b>Email</b></span><span><small><b>2020/10/14 04:57:06</b></small></span>
														<br>Dear users please use a VALID email in your profile incase you lost your password so you can recover it.
														<br>
													</li>
													<li class="mb-2"><span class="btn btn-info btn-sm mr-2 mt-1 mb-1 waves-effect waves-light"><b>Warning</b></span><span><small><b>2020/04/06 06:18:01</b></small></span>
														<br>Orders will be automatically refunded after 6hours of the report time if the seller didnt replay.
														<br>
													</li>
													<li class="mb-2"><span class="btn btn-info btn-sm mr-2 mt-1 mb-1 waves-effect waves-light"><b>Free bonus $</b></span><span><small><b>2020/03/17 06:14:10</b></small></span>
														<br>every time your deposit starts from $50 you will receive a 5% bonus.
														<br>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3 pb-1">
											<ul class="nav nav-tabs" id="myTab" role="tablist">
												<li class="nav-item waves-effect waves-light" role="presentation">
													<button class="nav-link active" id="added-tab" data-toggle="tab" data-target="#added" type="button" role="tab" aria-controls="added" aria-selected="true">Latest Added Tools</button>
												</li>
												<li class="nav-item waves-effect waves-light" role="presentation">
													<button class="nav-link" id="sold-tab" data-toggle="tab" data-target="#sold" type="button" role="tab" aria-controls="sold" aria-selected="false">Latest Sold Tools</button>
												</li>
											</ul>
											<div class="tab-content" id="myTabContent">
												<div class="tab-pane fade  show active" id="added" role="tabpanel" aria-labelledby="added-tab">
													<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
														<div class="card-header">
															<i class="fas fa-table"></i>
															Latest 10 Added Tools
														</div>
														<div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
															<div id="roncaa" style="color: var(--font-color); background-color: var(--color-card);">
																<div class="scroll-area-lg" style="color: var(--font-color); background-color: var(--color-card);">
																	<div class="scrollbar-container ps--active-y" style="color: var(--font-color); background-color: var(--color-card);">
																		<ul class="list-group list-group-flush" style="color: var(--font-color); background-color: var(--color-card);">
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>2</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="cPanel.html">
																							cpanel </a></b></font> section.
																				By <b>Seller460</b>, 2023-05-09 </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>24</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="shell.html">
																							shell </a></b></font> section.
																				By <b>Seller460</b>, 2023-05-09 </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>102</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="cPanel.html">
																							cpanel </a></b></font> section.
																				By <b>Seller341</b>, 2023-05-09 </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>2</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="cPanel.html">
																							cpanel </a></b></font> section.
																				By <b>Seller420</b>, 2023-05-08 </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>46</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="mailer.html">
																							mailer </a></b></font> section.
																				By <b>Seller471</b>, 2023-05-08 </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>28</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="mailer.html">
																							mailer </a></b></font> section.
																				By <b>Seller460</b>, 2023-05-08 </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>56</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="shell.html">
																							shell </a></b></font> section.
																				By <b>Seller460</b>, 2023-05-08 </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>11</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="shell.html">
																							shell </a></b></font> section.
																				By <b>Seller309</b>, 2023-05-08 </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>85</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="cPanel.html">
																							cpanel </a></b></font> section.
																				By <b>Seller341</b>, 2023-05-08 </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>473</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="cPanel.html">
																							cpanel </a></b></font> section.
																				By <b>Seller376</b>, 2023-05-08 </li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="sold" role="tabpanel" aria-labelledby="sold-tab">
													<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
														<div class="card-header">
															<i class="fas fa-table"></i>
															Latest 10 Sold Tools
														</div>
														<div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
															<div id="roncaa" style="color: var(--font-color); background-color: var(--color-card);">
																<div class="scroll-area-lg" style="color: var(--font-color); background-color: var(--color-card);">
																	<div class="scrollbar-container ps--active-y" style="color: var(--font-color); background-color: var(--color-card);">
																		<ul class="list-group list-group-flush" style="color: var(--font-color); background-color: var(--color-card);">
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				<b>Seller420</b> Sold <font color="green"><b>
																						<a class="text-success" href="smtp.html">smtp</a></b></font> To <b>Buyer21291</b>, 2023-05-09 15:34:13
																			</li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				<b>Seller341</b> Sold <font color="green"><b>
																						<a class="text-success" href="smtp.html">premium_cpanel</a></b></font> To <b>Buyer8667</b>, 2023-05-09 15:11:11
																			</li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				<b>Seller341</b> Sold <font color="green"><b>
																						<a class="text-success" href="smtp.html">premium_cpanel</a></b></font> To <b>Buyer8667</b>, 2023-05-09 15:11:09
																			</li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				<b>Seller341</b> Sold <font color="green"><b>
																						<a class="text-success" href="smtp.html">premium_cpanel</a></b></font> To <b>Buyer8667</b>, 2023-05-09 15:10:23
																			</li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				<b>Seller341</b> Sold <font color="green"><b>
																						<a class="text-success" href="smtp.html">premium_cpanel</a></b></font> To <b>Buyer8667</b>, 2023-05-09 15:09:53
																			</li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				<b>Seller353</b> Sold <font color="green"><b>
																						<a class="text-success" href="cPanel.html">cpanel</a></b></font> To <b>Buyer7331</b>, 2023-05-09 15:02:17
																			</li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				<b>Seller309</b> Sold <font color="green"><b>
																						<a class="text-success" href="shell.html">shell</a></b></font> To <b>Buyer5397</b>, 2023-05-09 14:52:43
																			</li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				<b>Seller382</b> Sold <font color="green"><b>
																						<a class="text-success" href="business-2.html">Godaddy Webmail</a></b></font> To <b>Buyer17699</b>, 2023-05-09 14:45:37
																			</li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				<b>Seller465</b> Sold <font color="green"><b>
																						<a class="text-success" href="mailer.html">mailer</a></b></font> To <b>Buyer13671</b>, 2023-05-09 14:40:18
																			</li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				<b>Seller309</b> Sold <font color="green"><b>
																						<a class="text-success" href="shell.html">shell</a></b></font> To <b>Buyer20890</b>, 2023-05-09 14:17:31
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="mb-3 pb-1">
											<ul class="nav nav-tabs" id="myTab" role="tablist">
												<li class="nav-item waves-effect waves-light" role="presentation">
													<button class="nav-link active" id="offer-tab" data-toggle="tab" data-target="#offer" type="button" role="tab" aria-controls="offer" aria-selected="true">Latest Sellers Offers</button>
												</li>
												<li class="nav-item waves-effect waves-light" role="presentation">
													<button class="nav-link" id="request-tab" data-toggle="tab" data-target="#request" type="button" role="tab" aria-controls="request" aria-selected="false">Latest Buyers Requests</button>
												</li>
											</ul>
											<div class="tab-content" id="myTabContent">
												<div class="tab-pane fade  show active" id="offer" role="tabpanel" aria-labelledby="offer-tab">
													<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
														<div class="card-header">
															<i class="fas fa-table"></i>
															Latest 10 Added Sellers Offers
														</div>
														<div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
															<div id="roncaa" style="color: var(--font-color); background-color: var(--color-card);">
																<div class="scroll-area-lg" style="color: var(--font-color); background-color: var(--color-card);">
																	<div class="scrollbar-container ps--active-y" style="color: var(--font-color); background-color: var(--color-card);">
																		<ul class="list-group list-group-flush" style="color: var(--font-color); background-color: var(--color-card);">
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>100 mixed shells</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="offers.html">Offers</a></b></font> section.
																				By <b>Seller447</b>, 19/01/2023 05:15:10 pm </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>Fully Verified CashApp Account BTC Enable</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="offers.html">Offers</a></b></font> section.
																				By <b>Seller466</b>, 02/01/2023 12:56:28 am </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>Fully Verified Wise Account [Business] [id+pass+email+documents]</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="offers.html">Offers</a></b></font> section.
																				By <b>Seller466</b>, 02/01/2023 12:51:15 am </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>ETH, BSC, MATIC Drainer</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="offers.html">Offers</a></b></font> section.
																				By <b>Seller455</b>, 03/11/2022 06:41:27 pm </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>Creation of PMTA and SMTP for turnkey distribution</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="offers.html">Offers</a></b></font> section.
																				By <b>Seller455</b>, 03/11/2022 06:37:35 pm </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>ETH Drainer</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="offers.html">Offers</a></b></font> section.
																				By <b>Seller447</b>, 04/10/2022 08:05:59 pm </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>20 cpanels mixed country</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="offers.html">Offers</a></b></font> section.
																				By <b>Seller447</b>, 26/09/2022 03:10:22 pm </li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="request" role="tabpanel" aria-labelledby="request-tab">
													<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
														<div class="card-header">
															<i class="fas fa-table"></i>
															Latest 10 Added Buyers Requests
														</div>
														<div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
															<div id="roncaa" style="color: var(--font-color); background-color: var(--color-card);">
																<div class="scroll-area-lg" style="color: var(--font-color); background-color: var(--color-card);">
																	<div class="scrollbar-container ps--active-y" style="color: var(--font-color); background-color: var(--color-card);">
																		<ul class="list-group list-group-flush" style="color: var(--font-color); background-color: var(--color-card);">
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>.EDU ADMIN</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="requests.html">Requests</a></b></font> section.
																				By <b>Buyer15241</b>, 2023/05/07 02:00:20 am </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>[WTB] subdomain creation access to high authority websites</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="requests.html">Requests</a></b></font> section.
																				By <b>Buyer21446</b>, 2023/05/04 05:11:34 am </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>Netflix account needed</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="requests.html">Requests</a></b></font> section.
																				By <b>Buyer16482</b>, 2023/04/30 15:13:27 pm </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>KAGOYA SMTO</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="requests.html">Requests</a></b></font> section.
																				By <b>Buyer15241</b>, 2023/04/26 21:18:19 pm </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>Accounts/No MFA for passport.aliyun.com</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="requests.html">Requests</a></b></font> section.
																				By <b>Buyer7560</b>, 2023/04/04 19:30:12 pm </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>Tinder gold account</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="requests.html">Requests</a></b></font> section.
																				By <b>Buyer16482</b>, 2023/04/02 17:15:46 pm </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>Workspace Godaddy Webmail</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="requests.html">Requests</a></b></font> section.
																				By <b>Buyer19074</b>, 2023/03/16 01:34:16 am </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>Azure account needed with sub</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="requests.html">Requests</a></b></font> section.
																				By <b>Buyer19533</b>, 2023/03/13 23:35:34 pm </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>Inbox Sender</b></font> items in The <font color="green"><b>
																						<a class="text-success" href="requests.html">Requests</a></b></font> section.
																				By <b>Buyer19781</b>, 2023/03/13 17:13:11 pm </li>
																			<li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
																				Added <font color="red"><b>UK RDP </b></font> items in The <font color="green"><b>
																						<a class="text-success" href="requests.html">Requests</a></b></font> section.
																				By <b>Buyer17462</b>, 2023/03/08 14:05:18 pm </li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card mb-3 pb-1" style="color: var(--font-color); background-color: var(--color-card);">
											<div class="card-header">
												<i class="fab fa-btc"></i>
												Become Seller
											</div>
											<div class="card-body payment_methods" style="color: var(--font-color); background-color: var(--color-card);">
												Interested in becoming a <b>Seller <i class="fab fa-btc">
													</i></b> at OdinShop ?
												<a href="login.html" class="btn btn-primary waves-effect waves-light">
													Become a Seller &amp; Seller Rules<i class="fab fa-btc"></i>
												</a>
												<br><br>
												Available Payment Methods
												<br>
												<a href="addBalance.html"><img src="layout/images/pmlogo2.png" height="48" width="49" title="PerfectMoney"></a>
												<a href="addBalance.html"><img src="layout/images/btclogo.png" height="48" width="49" title="Bitcoin"></a>
												<a href="addBalance.html"><img src="layout/images/ltclogo.png" height="48" width="49" title="Litecoin"></a>
												<a href="addBalance.html"><img src="layout/images/bnb.png" height="48" width="49" title="Binance Token"></a>
												<a href="addBalance.html"><img src="layout/images/ethereum.png" height="48" width="49" title="Etherum"></a>
												<a href="addBalance.html"><img src="layout/images/trc.png" height="48" width="49" title="Tether [USDT/TRC20]"></a>
												<a href="addBalance.html"><img src="layout/images/bch.png" height="48" width="49" title="Bitcoin Cash"></a>
												<a href="addBalance.html"><img src="layout/images/dgc.jpg.png" height="48" width="49" title="Dogecoin"></a>
												<a href="addBalance.html"><img src="layout/images/monero.png" height="48" width="49" title="Monero"></a>
												<a href="addBalance.html"><img src="layout/images/erc20.png" height="58" width="59" title="USDT.ERC20"></a>
											</div>
										</div>
										<div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
											<div class="card-header">
												<i class="fas fa-chart-pie"></i>
												Our Stuff
											</div>
											<div class="card-body" style="color: var(--font-color); background-color: var(--color-card);">
												<div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
													<div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
														<div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
														</div>
													</div>
													<div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
														<div style="position:absolute;width:200%;height:200%;left:0; top:0">
														</div>
													</div>
												</div>
												<canvas id="myPieChart" width="792" height="792" style="display: block; width: 264px; height: 264px;" class="chartjs-render-monitor"></canvas>
											</div>
											<div class="card-footer small text-primary" style="color: var(--font-color); background-color: var(--color-card);">Page Loaded in 1.4943 Seconds</div>
										</div>
									</div>
								</div>
							</div>
							
							<script type="text/javascript">
								var Tawk_API = Tawk_API || {}
									, Tawk_LoadStart = new Date( );
								( function ( ) {
									var s1 = document.createElement( "script" )
										, s0 = document.getElementsByTagName( "script" )[ 0 ];
									s1.async = true;
									s1.src = 'https://embed.tawk.to/60bb67b9dd60a20abbe4bab4/1f7e0qbvo';
									s1.charset = 'UTF-8';
									s1.setAttribute( 'crossorigin', '*' );
									s0.parentNode.insertBefore( s1, s0 );
								} )( );
								
							</script>
							
							<script type="text/javascript" src="layout/js/Chart.min.js"></script>
							<script>
								var clipboard = new Clipboard( '.copydiv' );
								
							</script>
							<script type="text/javascript">
								// Set new default font family and font color to mimic Bootstrap's default styling
								Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
								Chart.defaults.global.defaultFontColor = '#2196F3';
								
								// Pie Chart Example
								var ctx = document.getElementById( "myPieChart" );
								var myPieChart = new Chart( ctx, {
									type: 'pie'
									, data: {
										labels: [ 'cPanels [15489]', 'Leads [244]', 'Shells [919]', 'RDPs [76]', 'Mailers [488]', 'Scripts [3]', 'Tutorials [1]', 'Accounts [1638]', 'SMTPs [2291]', 'Webmails [20293]', 'FTPs [96]', 'SSH [135]' ]
										, datasets: [ {
											data: [ '15489', '244', '919', '76', '488', '3', '1', '1638', '2291', '20293', '96', '135' ]
											, backgroundColor: [ '#007bff', '#dc3545', '#ffc107', '#28a745', '#e1297d', '#551a8b', '#D5B0F7', '#B5D2ED', '#212529', '#256633', '#633256', '#97de12' ]
										, } ]
									, },
									
									options: {
										cutoutPercentage: 50
										, tooltips: {
											callbacks: {
												label: function ( tooltipItem, data ) {
													var dataset = data.datasets[ tooltipItem.datasetIndex ];
													var meta = dataset._meta[ Object.keys( dataset._meta )[ 0 ] ];
													var total = meta.total;
													var currentValue = dataset.data[ tooltipItem.index ];
													var percentage = parseFloat( ( currentValue / total * 100 ).toFixed( 1 ) );
													return currentValue + ' (' + percentage + '%)';
												}
												, title: function ( tooltipItem, data ) {
													return data.labels[ tooltipItem[ 0 ].index ];
												}
											}
										}
									}
								} );
								
							</script>
						</div>
					</div>
					
					
				</b>
			</b>
		</b>
	</b>
	<cloudflare-app app="corner-ribbon" data-size="small" data-position="bottom-left" style="z-index: 1000000; height: 130px; width: 130px;"><a href="premium_shell.html" class="ribbon-content" style="color: rgb(255, 255, 255); background-color: rgb(255, 0, 0);">Upgrade Your Account</a></cloudflare-app>
	<div class="hiddendiv common"></div>
	<script async="" charset="UTF-8" src="../embed.tawk.to/_s/v4/app/642b759ae8c/languages/en.js"></script>
</body>

</html>







































          
          
          
          
          
          
          
          
          
          

<?php 
  
  include "footer.php";

?>
