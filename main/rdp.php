<?php   								     include    						         "header.php"; ?>


 <script src="layout/js/jquery.min.js"></script>
<style>

.display  td {
    background: var(--color-card);
      color: var(--font-color);

}
    
.dataTables_paginate .paginate_button.disabled:active {

    color: var(--font-color);

}
.alert-info {
    color: var(--color-info);
    background-color: var(--color-backinfo);
    border-color: var(--color-borderinfo);

}

#rdp_data_filter{ color: var(--font-color);}
    
#rdp_data_length{ color: var(--font-color);}
    
#rdp_data_paginate {color: var(--font-color);}
    
#rdp_data_info{ color: var(--font-color); }
    
#rdp_data_sort{ color: var(--font-color); }
</style>

#table {
  .sortable
}
table th:not(
.sorttable_sorted

)
:not(

.sorttable_sorted_reverse

)

:not(

.table_nosort

):after { 
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

   
    

</style>
<?php 
                  include                 						  "navbar_header.php"; 

?>

<style>
.modal-dialog.modal-frame.modal-top.modal-notify.modal-danger .modal-body,.modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger .modal-body{
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
</style> 

<div class="d-flex flex-row-reverse mt-0">
<div class="p-2"><label id="switch" class="switch">
<input type="checkbox" onchange="toggleTheme()" id="slider">
<span class="slider round"></span>
</label>
    
    </div>
</div>
<div class="alert alert-info text-left" role="alert" style="margin: 15px;">
<ul>
<li> Click on check button before buy any RDP to know if it's work or not.</li>
<li>There is <b> 74 </b> RDPs Available.</li>
</ul>
</div>
<div class="row m-3 pt-1" style="color: var(--font-color);">
<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
<label for="country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
<select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
<option value="">All Countries</option>

    <option value="Australia">Australia</option><option value="Germany">Germany</option><option value="Hong Kong">Hong Kong</option><option value="India">India</option><option value="Ireland">Ireland</option><option value="Netherlands">Netherlands</option><option value="Norway">Norway</option><option value="Singapore">Singapore</option><option value="South Africa">South Africa</option><option value="South Korea">South Korea</option><option value="Sweden">Sweden</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option> </select>
</div>
<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
<label for="hosting" style="margin-bottom: 10px; margin-top: 5px">Hosting :</label>
<select name="detect_hosting" id="detect_hosting" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
<option value="">All</option>

    <option value="Amazon Technologies Inc. (AMAZON)">Amazon Technologies Inc. (AMAZON)</option><option value="Amazon Technologies Inc. (EC2)">Amazon Technologies Inc. (EC2)</option><option value="Hetzner Online GmbH">Hetzner Online GmbH</option><option value="Microsoft">Microsoft</option><option value="Microsoft do Brasil Imp. e Com. Software e Video G">Microsoft do Brasil Imp. e Com. Software e Video G</option><option value="MICROSOFT-CORP-MSN-AS-BLOCK">MICROSOFT-CORP-MSN-AS-BLOCK</option> </select>
</div>
<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
<label for="windows" style="margin-bottom: 10px; margin-top: 5px">windows :</label>
<select name="windows" id="windows" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
<option value="">All</option>
<option value="10">10</option
    </select>
</div>
<div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
<label for="ram" style="margin-bottom: 10px; margin-top: 5px">Ram :</label>
<input type="search" class="form-control" id="ram" style="color: var(--font-color); background-color: var(--color-card);">
</div>
<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
<label for="type" style="margin-bottom: 10px">Type :</label>
<select name="source" id="source" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
<option value="">All</option>
<option value="cracked">cracked</option><option value="created">created</option> </select>
</div>
<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
<label for="access" style="margin-bottom: 10px; margin-top: 5px">Access :</label>
<select name="access" id="access" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
<option value="">All</option>
<option value="ADMIN">ADMIN</option> </select>
</div>
<div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
<label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
<select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
<option value="">All</option>
<option value="Seller349">Seller349</option><option value="Seller382">Seller382</option><option value="Seller397">Seller397</option><option value="Seller473">Seller473</option><option value="Seller457">Seller457</option><option value="Seller306">Seller306</option><option value="Seller420">Seller420</option> </select>
</div>
</div>
<div class="row m-2 pt-3" style="color: var(--font-color); background-color: var(--color-card);">
<div class="col-sm-12 table-responsive">
<table id="rdp_data" class="display responsive table-hover" style="width:100%" style="color: var(--font-color); background-color: var(--color-card);">
<thead>
<tr>
<th data-priority="1"></th>
<th class="all">ID</th>
<th data-priority="3">Country</th>
<th class="all" style="width:9% !important;">Source</th>
<th data-priority="14">Windows</th>
<th data-priority="6">Ram</th>
<th data-priority="17">Access</th>
<th data-priority="8">Hosting</th>
<th data-priority="11">Seller</th>
<th data-priority="13">Price</th>
<th data-priority="16">Added on</th>
<th class="all">Buy</th>
</tr>
</thead>
      <tbody class="scrollbody" id="aria-hidden="true"text-center">
</table>
</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-notify modal-success" role="document">
<div class="modal-content">
<div class="modal-header">
<p class="heading" id="myModalHeader">
                                     </p>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true" class="white-text">&times;</span>
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

        $(document).ready(function(){
           var webID;
            load_data();

            function load_data(myarray) {
                $('#rdp_data').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "order": [],
                    "responsive":true,
                    "scrollX": true,
                     "columnDefs": [ {
                             targets: [ 0 ],
                             visible: false }

                             ],
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
                     { "data": 9 },
                     { "data": 10 },
                     { "data": 11 },
                     { "data": 12 },
                     { "data": 13 },
                     { "data": 14 },
                     { "data": 15 },
                     { "data": 16 }

                          ],
                          "createdRow": function (row, data, index) {
                             $(row).css("background-color", "var(--color-card)");
                              $(row).css("color", "var(--font-color)");
                        },


                "lengthMenu": [[10, 25, 50, 100, 500, 10000], [10, 25, 50, 100, 500, "All"]],

                    "ajax":{
                        url:"divPage1.php",
                        type:"POST",
                        data: {data_filters:myarray,
                              draw : 'draw',
                              row : 'start',
                             rowperpage : 'length',
                             columnIndex : 'order',
                             columnName : 'columns',
                             columnSortOrder : 'order',
                             searchValue : 'search'}
                    },

                    "pageLength": 500
                });
            }

            $(document).on('change', '.form-control', function(){
                 $('#rdp_data').DataTable().destroy();
                var country = $('#country').val();
                var detectHosting = $('#detect_hosting').val();
                var windows = $('#windows').val();
                var source = $('#source').val();
                var access = $('#access').val();
                var ram = $('#ram').val();
                var seller1 = $('#seller').val();
                $idseller = seller1.split("Seller");
                 var seller= $idseller[1];
                 var myarray = {};
                 myarray[0] = country;
                 myarray[1] = detectHosting;
                 myarray[2] = windows;
                 myarray[3] = source;
                 myarray[4] = access;
                 myarray[5] = ram;
                 myarray[6] = seller;


              if(country != '' || detectHosting != '' || windows != '' || source != '' || access != '' || ram != '' || seller != '')
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
                        url:"buytool.php?id="+id+"&t=rdps",
                        dataType:"text",
                        success:function(data){
                            if(data.match("buy")){
                                let lastid = data.split("buy,")[1];
                                $("#rdp"+id).html(`<button onclick=openitem(${lastid}) class='btn btn-success btn-sm" style="font-size: 11px; cursor:pointer'>Order ${'#'+lastid}</button>`).show();

                            }else{
                                if(data.match("deleted")){

                                $("#rdp"+id).html('Already sold / Deleted').show();

                                  }else{
                                $('#modalCoupon').modal('show');
                                }

                            }
                        },
                    });

        }

        g:xcheck=0;
        function check(id){

            if(xcheck > 1){
                bootbox.alert("<b>Wait</b> - Other checking operation is executed!");
            } else {
                xcheck++;
                var type = $("#shop"+id).attr('type')
                $("#shop"+id).html('<b><span class="indigo-text" align="center"> <i class="fas fa-spinner indigo-text fa-pulse fa-3x mx-4"></i></span></b> ').show();

                $.ajax({
                    type:       'GET',
                    url:        'CheckRdp'+id,
                    success: function(data)
                    {

                        if (data.match("Success")) {
                            $("#shop"+id).html(`<span class='btn btn-success btn-sm' style='font-size: 12px'>Working</span>`).show();

                          }
                        else{
                            var ide= "bad-rdp"+id;
                            $("#shop"+id).html('<span id=' + ide + ' class="btn btn-danger btn-sm" style="font-size: 12px">Bad!</span>').show();

                            var tr = $("#shop"+id).parents('tr');

                                 setTimeout(function(){
                                 $('#rdp_data').DataTable().row(tr).child.hide();
                                 }, 2000);
                                $("#"+ide).parent().parent().parent().delay(3000).hide('slow');
                             }
                         xcheck--;
                    }
                });

            }

        }


        function blackList(ip, id){


            $('#' + id).html('<b><span class="indigo-text" align="center"> <i class="fas fa-spinner indigo-text fa-pulse fa-3x mx-4"></i></span></b> ').show();

            $.ajax({
                type:       'GET',
                url:        'check_blacklist.php?check_ip='+ip,
                success:    function(data)
                {
                    let result = data.split(',')[0];
                    let total = data.split(',')[1];
                    if(result < 5)
                        {

                        $('#' + id).html(`<span style='font-size: 0.7rem !important;' class='btn btn-sm btn-success'>POSSIBLY SAFE ${result + '/' + total} </span>`).show();

                            }
                    else
                        {
                         $('#' + id).html(`<span style='font-size: 0.7rem !important;' class='btn btn-sm btn-danger'>Un Safe ${result} / ${total}</span>`).show();

                            }


                }
            });

        }
         function openitem(order){
         $("#myModalHeader").text('Order #'+order);
         $('#myModal').modal('show');

        $.ajax({
        type:       'GET',
        url:        'showOrder'+order,
        success:    function(data)
        {
       $("#modelbody").html(data).show();
        }});

        }

    </script>
</body>
</html>


<div class="rdp_data.html" id="rdp"></div>

             






















<?php include "footer.php";?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="divPage.min.js"></script>


</body>
</html>
