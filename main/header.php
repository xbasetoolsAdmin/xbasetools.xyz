<?php


?>
<!DOCTYPE html>
<head>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <link rel="stylesheet"  href="vendor/DataTables/jquery.datatables.min.css">	
    <script src="vendor/DataTables/jquery.dataTables.min.js"type="text/javascript"></script> 
   
    <link href="layout/css/main.css" rel="stylesheet" type="text/css" />

    <title>Column Search in DataTables using Server-side Processing</title>
    <script>
        $(document).ready(function ()
        {   
            var table = $('#tbl-contact').DataTable({
                	"scrollX": true,
            		"pagingType": "numbers",
                "processing": true,
                "serverSide": true,
                "ajax": "divPage0.php",
                order: [[2, 'asc']],
                columnDefs: [{
                    targets: "_all",
                    orderable: false
                 }]
            });
        });

    </script>
</head>

