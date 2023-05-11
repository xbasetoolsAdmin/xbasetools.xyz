<?php
 include "header.php"
;?>

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


		<style>

.display  td {
    background: var(--color-card);
      color: var(--font-color);

}
.dataTables_wrapper .dataTables_paginate .paginate_button {

    color: var(--font-color);

}
#table_paginate .paginate_button {
color: var(--font-color);

}

.alert-info {
    color: var(--color-info);
    background-color: var(--color-backinfo);
    border-color: var(--color-borderinfo);

}

#table_filter{
  color: var(--font-color);
}
#table_length{
  color: var(--font-color);
}
#table_paginate{
  color: var(--font-color);
}
#table_info{
  color: var(--font-color);
}

		</style>
	</head>
	
	<?php include"shell.php"?>
	
		<div class="alert alert-info text-left" role="alert" style="margin: 15px;">
			<ul>
				<li>We Have Fresh E-mails Lists for Diffrents Countries ( You Can Use it for Spam ).
				</li>
				<li>Our E-mails Lists Guarante for you Good results because most of them are from Shops and Big Sites .</li>
				<li>Combo use for cracking (Brute forcing attack) not use for login to email.</li>
				<li>There is
					<b>
						1
					</b>
					Available.</li>
			</ul>
		</div>
		<input type="hidden" id="type" name="type" value="3">
		<div class="row m-3 pt-1" style="color: var(--font-color);">
			<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
				<label for="infos" style="margin-bottom: 10px; margin-top: 5px">Description:</label>
				<input type="search" class="form-control" id="infos" style="color: var(--font-color); background-color: var(--color-card);">
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
				<label for="Country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
				<select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
					<option value="">All Countries</option>
					<option value="WorldWide">WorldWide</option>
				</select>
			</div>
			<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
				<label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
				<select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
					<option value="">All</option>
					<option value="Seller482">Seller482</option>
				</select>
			</div>
		</div>
		<div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
			<div class="col-sm-12 table-responsive">
				<div id="table_wrapper" class="dataTables_wrapper no-footer">
					<div class="dataTables_length" id="table_length">
						<label>Show
							<select name="table_length" aria-controls="table" class="">
								<option value="10">10</option>
								<option value="25">25</option>
								<option value="50">50</option>
								<option value="100">100</option>
								<option value="500">500</option>
								<option value="10000">All</option>
							</select>
							entries</label>
					</div>
					<div id="table_filter" class="dataTables_filter">
						<label>Search:<input type="search" class="" placeholder="" aria-controls="table">
						</label>
					</div>
					<div id="table_processing" class="dataTables_processing" style="display: none;">Processing...</div>
					<div class="dataTables_scroll">
						<div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
							<div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 979px; padding-right: 0px;">
								<table class="display responsive table-hover dataTable no-footer" style="width: 979px; color: var(--font-color); background-color: var(--color-card); margin-left: 0px;" role="grid">
									<thead>
										<tr role="row">
											<th class="all sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 15.984375px;" aria-label="ID: activate to sort column ascending">ID</th>
											<th data-priority="3" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 55.921875px;" aria-label="Country: activate to sort column ascending">Country</th>
											<th data-priority="6" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 171.515625px;" aria-label="Description: activate to sort column ascending">Description</th>
											<th data-priority="7" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 37.984375px;" aria-label="Email N: activate to sort column ascending">Email N</th>
											<th data-priority="8" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 104px;" aria-label="Seller: activate to sort column ascending">Seller</th>
											<th data-priority="2" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 79px;" aria-label="Proof: activate to sort column ascending">Proof</th>
											<th data-priority="9" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 34.984375px;" aria-label="Price: activate to sort column ascending">Price</th>
											<th data-priority="10" class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 89.6875px;" aria-label="Added on : activate to sort column ascending">Added on
											</th>
											<th class="all sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 66px;" aria-label="Buy: activate to sort column ascending">Buy</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
						<div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
							<table id="table" class="display responsive table-hover dataTable no-footer dtr-inline" style="width: 100%; color: var(--font-color); background-color: var(--color-card);" role="grid" aria-describedby="table_info">
								<thead>
									<tr role="row" style="height: 0px;">
										<th class="all sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 15.984375px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="ID: activate to sort column ascending">
											<div class="dataTables_sizing" style="height:0;overflow:hidden;">ID</div>
										</th>
										<th data-priority="3" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 55.921875px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Country: activate to sort column ascending">
											<div class="dataTables_sizing" style="height:0;overflow:hidden;">Country</div>
										</th>
										<th data-priority="6" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 171.515625px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Description: activate to sort column ascending">
											<div class="dataTables_sizing" style="height:0;overflow:hidden;">Description</div>
										</th>
										<th data-priority="7" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 37.984375px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Email N: activate to sort column ascending">
											<div class="dataTables_sizing" style="height:0;overflow:hidden;">Email N</div>
										</th>
										<th data-priority="8" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 104px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Seller: activate to sort column ascending">
											<div class="dataTables_sizing" style="height:0;overflow:hidden;">Seller</div>
										</th>
										<th data-priority="2" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 79px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Proof: activate to sort column ascending">
											<div class="dataTables_sizing" style="height:0;overflow:hidden;">Proof</div>
										</th>
										<th data-priority="9" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 34.984375px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Price: activate to sort column ascending">
											<div class="dataTables_sizing" style="height:0;overflow:hidden;">Price</div>
										</th>
										<th data-priority="10" class="sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 89.6875px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Added on : activate to sort column ascending">
											<div class="dataTables_sizing" style="height:0;overflow:hidden;">Added on
											</div>
										</th>
										<th class="all sorting" aria-controls="table" rowspan="1" colspan="1" style="width: 66px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Buy: activate to sort column ascending">
											<div class="dataTables_sizing" style="height:0;overflow:hidden;">Buy</div>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr role="row" class="odd">
										<td class="dtr-control">7634</td>
										<td>
											<i class="flag-icon flag-icon-ww"></i>
											WorldWide</td>
										<td>FRESH LINES/SOCIAL MEDIA TARGET</td>
										<td>17</td>
										<td>
											<a href="profile-Seller482" class="btn btn-primary btn-sm" style="font-size: 11px; cursor:pointer" target="_blank">
												<i class="fas fa-user mr-1"></i>Seller482</a>
										</td>
										<td>
											<span>
												<a href="https://i.imgur.com/IlwfF6F.png" class="btn btn-primary btn-sm" target="popup" onclick="window.open('https://i.imgur.com/IlwfF6F.png','popup', width=600,height=600); return false;">View Proof</a>
											</span>
										</td>
										<td>10.00</td>
										<td>30/03/2023 11:20:08 am</td>
										<td>
											<span id="lead7634" title="buy" type="leads">
												<a onclick="javascript:buythistool(7634)" class="btn btn-primary btn-sm" style="font-size: 11px; cursor:pointer">
													<i class="fas fa-shopping-cart mr-1"></i>Buy</a>
											</span>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="dataTables_info" id="table_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
					<div class="dataTables_paginate paging_simple_numbers" id="table_paginate">
						<a class="paginate_button previous disabled" aria-controls="table" data-dt-idx="0" tabindex="0" id="table_previous">Previous</a>
						<span>
							<a class="paginate_button current" aria-controls="table" data-dt-idx="1" tabindex="0">1</a>
						</span>
						<a class="paginate_button next disabled" aria-controls="table" data-dt-idx="2" tabindex="0" id="table_next">Next</a>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
			<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-notify modal-success" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<p class="heading" id="myModalHeader"></p>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true" class="white-text">×</span>
						</button>
					</div>
					<div class="modal-body" id="modelbody">
					</div>
					<div class="modal-footer justify-content-center">
						<a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Close</a>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="modalConfirmBuy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-sm modal-notify modal-info" role="document">
				<div class="modal-content text-center">
					<div class="modal-header d-flex justify-content-center">
						<p class="heading">Are you sure?</p>
					</div>
					<div class="modal-body">
						<i class="fas fa-shopping-cart fa-4x animated rotateIn"></i>
					</div>
					<div class="modal-footer flex-center">
						<a onclick="confirmbye()" class="btn btn-outline-info waves-effect" data-dismiss="modal">Yes</a>
						<a type="button" class="btn btn-info waves-effect waves-light" data-dismiss="modal">No</a>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade top" id="modalCoupon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
			<div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<div class="row d-flex justify-content-center align-items-center">
							<img src="layout/images/balance.png">
							<span class="pt-3 mx-4" style="font-size: 14 px">
								<b>No enough balance !</b>
								Please refill your balance</span>
							<a type="button" href="addBalance" onclick="window.open(this.href);return false;" class="btn btn-danger waves-effect waves-light">Add Balance
								<i class="fas fa-book ml-1 white-text"></i>
							</a>
							<a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No, thanks</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>

        $(document).ready(function(){
            var webID;
            load_data();

            function load_data(myarray) {
                $('#table').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "responsive": true,
                    "scrollX": true,
                    "order": [],
                    "lengthMenu": [[10, 25, 50, 100, 500, 10000], [10, 25, 50, 100, 500, "All"]],
                    "columnDefs": [
                        {
                            "targets": [ 0 ],
                            "visible": false
                        }
                    ],

                    "ajax":{
                        url:"divPage32.html",
                        type:"POST",
                        data:{
                            data_filter:myarray,
                            type:document.getElementById('type').value,
                             draw : 'draw',
                             row : 'start',
                             rowperpage : 'length',
                             columnIndex : 'order',
                             columnName : 'columns',
                             columnSortOrder : 'order',
                             searchValue : 'search'
                              }
                    },
                 "columns": [
                                { "data": 0 },
                                { "data": 1 },
                                { "data": 2 },
                                { "data": 3 },
                                { "data": 4 },
                                { "data": 5 },
                                { "data": 6 },
                                { "data": 7 },
                                { "data": 8 },
                                { "data": 9 }
                            ],

                    "pageLength": 500
                });
            }

            $(document).on('change', '.form-control', function(){
                $('#table').DataTable().destroy();
                 var country = $('#country').val();
                var description = $('#infos').val();
                 var seller1 = $('#seller').val();
                $idseller = seller1.split("Seller");
                 var seller= $idseller[1];
                 var myarray = {};

                 myarray[0] = country;
                 myarray[1] = description;
                 myarray[2] = seller;

              if(country != '' || description != '' || seller != '')
                {

                   load_data(myarray);
                }
                else
                {
                    load_data();
                }
                });


        });

       function buythistool(id){
         $('#modalConfirmBuy').modal('show');
         webID= id;
                        }

        function confirmbye(id){
              id= webID;
            $.ajax({
                        method:"GET",
                        url:"buytool.php?id="+id+"&t=leads",
                        dataType:"text",
                        success:function(data){
                                if(data.match("buy")){
                                let lastid = data.split("buy,")[1];
                                $("#lead"+id).html(`<button onclick=openitem(${lastid}) class="btn btn-success btn-sm">Order ${'#'+lastid}</button>`).show();

                            }
                            else{
                                if(data.match("deleted")){

                                $("#lead"+id).html('Already sold / Deleted').show();

                                  }else{
                                   $('#modalCoupon').modal('show');
                                }


                            }
                        },
                    });
        }
    function openitem(order){


        $.ajax({
        type:       'GET',
        url:        'showOrder'+order,
        success:    function(data)
        {
        $("#myModalHeader").text('Order #'+order);
        $("#modelbody").append(data);
        $('#myModal').modal();


        }});

        }

    
		</script>
		<div class="hiddendiv common"></div>
	</body>
</html>