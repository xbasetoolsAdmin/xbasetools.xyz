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

.table td {
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
	
	<?php include"shell.php"?>
	
<!DOCTYPE html>
<html>
 

    <div class="alert alert-info text-left" role="alert" style="margin: 15px;">
        <ul>
            <li>We Have Fresh E-mails Lists for Diffrents Countries ( You Can Use it for Spam ). </li>
            <li>Our E-mails Lists Guarante for you Good results because most of them are from Shops and Big Sites .</li>
            <li>Combo use for cracking (Brute forcing attack) not use for login to email.</li>
            <li>There is <b> 0 </b> Available.</li>
        </ul>
    </div>
    <input type=hidden id="type" name="type" value="5" />
    <div class="row m-3 pt-1" style="color: var(--font-color);">
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="infos" style="margin-bottom: 10px; margin-top: 5px">Description:</label>
            <input type="search" class="form-control" id="infos" style="color: var(--font-color); background-color: var(--color-card);">
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="Country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
            <select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All Countries</option>
            </select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
            <select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>
            </select>
        </div>
    </div>
    <div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
        <div class="col-sm-12 table-responsive">
            <table id="table" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
                <thead>
                    <tr>
                        <th data-priority="1"></th>
                        <th class="all">ID</th>
                        <th data-priority="3">Country</th>
                        <th data-priority="6">Description</th>
                        <th data-priority="7">Email N</th>
                        <th data-priority="8">Seller</th>
                        <th data-priority="2">Proof</th>
                        <th data-priority="9">Price</th>
                        <th data-priority="10">Added on </th>
                        <th class="all">Buy</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div id="mainDiv" class="scrollBody">
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
                    <i class='fas fa-shopping-cart fa-4x animated rotateIn'></i>
                </div>
 
                <div class="modal-footer flex-center">
                    <a onClick='confirmbye()' class="btn btn-outline-info waves-effect" data-dismiss="modal">Yes</a>
                    <a type="button" class="btn btn-info" data-dismiss="modal">No</a>
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
                        <span class="pt-3 mx-4" style="font-size: 14 px"><b>No enough balance !</b> Please refill your balance</span>
                        <a type="button" href="addBalance" onclick="window.open(this.href);return false;" class="btn btn-danger">Add Balance
                            <i class="fas fa-book ml-1 white-text"></i>
                        </a>
                        <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No, thanks</a>
                    </div>
                </div>
            </div>
 
        </div>
    </div>
 
    <script>
        $(document).ready(function() {
            var webID;
            load_data();
 
            function load_data(myarray) {
                $('#table').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "responsive": true,
                    "scrollX": true,
                    "order": [],
                    "lengthMenu": [
                        [10, 25, 50, 100, 500, 10000],
                        [10, 25, 50, 100, 500, "All"]
                    ],
                    "columnDefs": [{
                        "targets": [0],
                        "visible": false
                    }],
 
                    "ajax": {
                        url: "divPage32.html",
                        type: "POST",
                        data: {
                            data_filter: myarray,
                            type: document.getElementById('type').value,
                            draw: 'draw',
                            row: 'start',
                            rowperpage: 'length',
                            columnIndex: 'order',
                            columnName: 'columns',
                            columnSortOrder: 'order',
                            searchValue: 'search'
                        }
                    },
                    "columns": [{
                            "data": 0
                        },
                        {
                            "data": 1
                        },
                        {
                            "data": 2
                        },
                        {
                            "data": 3
                        },
                        {
                            "data": 4
                        },
                        {
                            "data": 5
                        },
                        {
                            "data": 6
                        },
                        {
                            "data": 7
                        },
                        {
                            "data": 8
                        },
                        {
                            "data": 9
                        }
                    ],
 
                    "pageLength": 500
                });
            }
 
            $(document).on('change', '.form-control', function() {
                $('#table').DataTable().destroy();
                var country = $('#country').val();
                var description = $('#infos').val();
                var seller1 = $('#seller').val();
                $idseller = seller1.split("Seller");
                var seller = $idseller[1];
                var myarray = {};
 
                myarray[0] = country;
                myarray[1] = description;
                myarray[2] = seller;
 
                if (country != '' || description != '' || seller != '') {
 
                    load_data(myarray);
                } else {
                    load_data();
                }
            });
 
 
        });
 
        function buythistool(id) {
            $('#modalConfirmBuy').modal('show');
            webID = id;
        }
 
        function confirmbye(id) {
            id = webID;
            $.ajax({
                method: "GET",
                url: "buytool.php?id=" + id + "&t=leads",
                dataType: "text",
                success: function(data) {
                    if (data.match("buy")) {
                        let lastid = data.split("buy,")[1];
                        $("#lead" + id).html(`<button onclick=openitem(${lastid}) class="btn btn-success btn-sm">Order ${'#'+lastid}</button>`).show();
 
                    } else {
                        if (data.match("deleted")) {
 
                            $("#lead" + id).html('Already sold / Deleted').show();
 
                        } else {
                            $('#modalCoupon').modal('show');
                        }
 
 
                    }
                },
            });
        }
 
        function openitem(order) {
 
 
            $.ajax({
                type: 'GET',
                url: 'showOrder' + order,
                success: function(data) {
                    $("#myModalHeader").text('Order #' + order);
                    $("#modelbody").append(data);
                    $('#myModal').modal();
 
 
                }
            });
 
        }
    </script>
</body>
 
</html>