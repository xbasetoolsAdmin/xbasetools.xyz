 <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="alfacoins-site-verification" content="5ef8c2279aa605ef8c2279aa965ef8c2279aacb_ALFAcoins">
        <meta name="revisit-after" content="2 days">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="/cdn-cgi/apps/head/AGN3NmUziwZfMV-TNTe1kdyeR2Y.js"></script>
        <link rel="shortcut icon" href="../../favicon.ico"/>
        <title>Accounts</title>
        <link rel="stylesheet" href="layout/css/bootstrap.min.css">
        <script src="layout/js/jquery-3.4.1.min.js"></script>
        <script src="layout/js/clipboard.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="layout/js/bootstrap.min.js"></script>
        <script src="layout/js/bootbox.min.js"></script>
        <link rel="stylesheet" type="text/css" href="layout/css/flags.css"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
        <script async src="//www.googletagmanager.com/gtag/js?id=UA-177092549-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('set', {
                '$usrid': 'USER_ID'
            });
            // Set the user ID using signed-in user_id.
            gtag('config', 'UA-177092549-1');
        </script>
        <link rel="stylesheet" href="layout/css/all.min.css"/>
        <link rel="stylesheet" href="layout/css/main.css?v=12.9"/>
        <link rel="stylesheet" href="layout/css/util.css"/>
        <style>
            body {
                padding-top: 80px
            }
        </style>
        <link rel="stylesheet" href="layout/fonts/iconic/css/material-design-iconic-font.min.css">
        <script src="layout/js/main.js"></script>
        <script type="text/javascript">
            // Notice how this gets configured before we load Font Awesome
            window.FontAwesomeConfig = {
                autoReplaceSvg: false
            }
        </script>
        <style>
            @import url(//fonts.googleapis.com/css?family=Roboto:400); .navbar-nav .dropdown-menu {
                margin: 0 !important
            }
        </style>
    </head>
    <style>
        .display td {
            background: var(--color-card);
            color: var(--font-color);
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            color: var(--font-color);
        }

        #account_data_paginate .paginate_button {
            color: var(--font-color);
        }

        .alert-info {
            color: var(--color-info);
            background-color: var(--color-backinfo);
            border-color: var(--color-borderinfo);
        }

        #account_data_filter {
            color: var(--font-color);
        }

        #account_data_length {
            color: var(--font-color);
        }

        #account_data_paginate {
            color: var(--font-color);
        }

        #account_data_info {
            color: var(--font-color);
        }
    </style>
    <body class="them">
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
                background: white url('https://i.ibb.co/FxzBYR9/night.png');
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
                background: white url('https://i.ibb.co/7JfqXxB/sunny.png');
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
            (function() {
                if (localStorage.getItem('theme') === 'theme-dark') {
                    setTheme('theme-dark');
                    document.getElementById('slider').checked = false;
                } else {
                    setTheme('theme-light');
                    document.getElementById('slider').checked = true;
                }
            }
            )();
        </script>
      <?php include "main/navbar_header.php";?>
    <ul>
        <li>For Any problem for account after buy just open report and seller will fix it or replace.</li>
        <li>
            There is <b>6 </b>
            Accounts Available.
        </li>
    </ul>
</div>
<input type=hidden id="cat" name="cat" value="2"/>
<div class="row m-3 pt-1" style="color: var(--font-color);">
    <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
        <label for="infos" style="margin-bottom: 10px; margin-top: 5px">Website Name :</label>
        <select name="sitename" id="sitename" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
            <option value="">All</option>
            <option value="https://my.bluehost.com/web-ho">https://my.bluehost.com/web-ho</option>
            <option value="https://portal.azure.com">https://portal.azure.com</option>
            <option value="https://signin.aws.amazon.com/">https://signin.aws.amazon.com/</option>
            <option value="https://uk.hosting24.com/cpane">https://uk.hosting24.com/cpane</option>
        </select>
    </div>
    <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
        <label for="infos" style="margin-bottom: 10px; margin-top: 5px">Details:</label>
        <input type="search" class="form-control" id="infos" style="color: var(--font-color); background-color: var(--color-card);">
    </div>
    <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
        <label for="Country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
        <select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
            <option value="">All Countries</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="United States">United States</option>
        </select>
    </div>
    <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
        <label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
        <select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
            <option value="">All</option>
            <option value="Seller349">Seller349</option>
            <option value="Seller327">Seller327</option>
            <option value="Seller342">Seller342</option>
        </select>
    </div>
</div>
<div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
    <div class="col-sm-12 table-responsive">
        <table id="account_data" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
            <thead>
                <tr>
                    <th data-priority="1"></th>
                    <th class="all">ID</th>
                    <th data-priority="3">Website Name</th>
                    <th data-priority="4">Country</th>
                    <th data-priority="7">Details</th>
                    <th data-priority="8">Price</th>
                    <th data-priority="9">Seller</th>
                    <th data-priority="10">Source</th>
                    <th class="all">Proof</th>
                    <th data-priority="11">Date Created</th>
                    <th class="all">Buy</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-notify modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="heading" id="myModalHeader"></p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modelbody"></div>
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
                    <span class="pt-3 mx-4" style="font-size: 14 px">
                        <b>No enough balance !</b>
                        Please refill your balance
                    </span>
                    <a type="button" href="addBalance" onclick="window.open(this.href);return false;" class="btn btn-danger">
                        Add Balance
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
            $('#account_data').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "scrollX": true,
                "order": [],
                "lengthMenu": [[10, 25, 50, 100, 500, 10000], [10, 25, 50, 100, 500, "All"]],
                "columnDefs": [{
                    "targets": [0],
                    "visible": false
                }],

                "ajax": {
                    url: "divPage31.html",
                    type: "POST",
                    data: {
                        data_filter: myarray,
                        cat: document.getElementById('cat').value,
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
                }, {
                    "data": 1
                }, {
                    "data": 2
                }, {
                    "data": 3
                }, {
                    "data": 4
                }, {
                    "data": 5
                }, {
                    "data": 6
                }, {
                    "data": 7
                }, {
                    "data": 8
                }, {
                    "data": 9
                }, {
                    "data": 10
                }],

                "pageLength": 500
            });
        }

        $(document).on('change', '.form-control', function() {

            $('#account_data').DataTable().destroy();
            var country = $('#country').val();
            var details = $('#infos').val();
            var seller1 = $('#seller').val();
            var website = $('#sitename').val();
            $idseller = seller1.split("Seller");
            var seller = $idseller[1];
            var myarray = {};
            myarray[0] = country;
            myarray[1] = details;
            myarray[2] = seller;
            myarray[3] = website;

            if (country != '' || details != '' || seller != '' || website != '') {

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
            url: "buytool.php?id=" + id + "&t=accounts",
            dataType: "text",
            success: function(data) {
                if (data.match("buy")) {
                    let lastid = data.split("buy,")[1];
                    $("#premium" + id).html(`<button onclick=openitem(${lastid}) class="btn btn-success btn-sm" style="font-size: 11px; cursor:pointer">Order ${'#' + lastid}</button>`).show();

                } else {
                    if (data.match("deleted")) {

                        $("#premium" + id).html('Already sold / Deleted').show();

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
</body></html>
