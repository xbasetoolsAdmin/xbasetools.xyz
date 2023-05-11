

<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "../includes/config.php";
if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) { header("location: ../"); exit();}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?> 
<html class="theme-dark">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="revisit-after" content="2 days">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="shortcut icon" href="../../favicon.ico">
		<title>Ticket</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js" >
	</script>
			<script src="jquery.dataTables.min.js"></script>
					<script src="files/js/main.js"></script>
		<script src="layout/js/clipboard.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="files/js/bootstrap.min.js"></script>
		<script src="files/js/bootbox.min.js"></script>
		<link rel="stylesheet" type="text/css" href="files/css/flags.css">
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
		<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
		<script async="" src="//www.googletagmanager.com/gtag/js?id=UA-177092549-1"></script>
		<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('set', {'$usrid': 'USER_ID'}); // Set the user ID using signed-in user_id.
        gtag('config', 'UA-177092549-1');
        
		</script>
		<link rel="stylesheet" href="files/css/all.min.css" />
		<link rel="stylesheet" href="files/css/main.css" />
		<link rel="stylesheet" href="files/css/util.css" />
		<style>body{padding-top:80px}</style>
		<link rel="stylesheet" href="files/fonts/iconic/css/material-design-iconic-font.min.css">
		<script src="layout/js/main.js"></script>
		<script type="text/javascript">
            // Notice how this gets configured before we load Font Awesome
            window.FontAwesomeConfig = { autoReplaceSvg: false }
        
		</script>
		<style>
            @import url(//fonts.googleapis.com/css?family=Roboto:400);
            .navbar-nav .dropdown-menu
            {
            margin:0 !important
            }
        
		</style>
		<script>
			/*! © Edouard Labre - datatables.net/license */

(function( factory ){
	if ( typeof define === 'function' && define.amd ) {
		// AMD
		define( ['jquery', 'datatables.net'], function ( $ ) {
			return factory( $, window, document );
		} );
	}
	else if ( typeof exports === 'object' ) {
		// CommonJS
		var jq = require('jquery');
		var cjsRequires = function (root, $) {
			if ( ! $.fn.dataTable ) {
				require('datatables.net')(root, $);
			}
		};

		if (typeof window !== 'undefined') {
			module.exports = function (root, $) {
				if ( ! root ) {
					// CommonJS environments without a window global must pass a
					// root. This will give an error otherwise
					root = window;
				}

				if ( ! $ ) {
					$ = jq( root );
				}

				cjsRequires( root, $ );
				return factory( $, root, root.document );
			};
		}
		else {
			cjsRequires( window, jq );
			module.exports = factory( jq, window, window.document );
		}
	}
	else {
		// Browser
		factory( jQuery, window, document );
	}
}(function( $, window, document, undefined ) {
'use strict';
var DataTable = $.fn.dataTable;


/**
 * This plugin jumps to the right page of the DataTable to show the required row
 *
 * @version 1.0
 * @name row().show()
 * @summary See the row in datable by display the right pagination page
 * @author [Edouard Labre](http://www.edouardlabre.com)
 *
 * @param {void} a row must be selected
 * @returns {DataTables.Api.Rows} DataTables Rows API instance
 *
 * @example
 *    // Add an element to a huge table and go to the right pagination page
 *    var table = $('#example').DataTable();
 *    var new_row = {
 *      DT_RowId: 'row_example',
 *      name: 'example',
 *      value: 'an example row'
 *    };
 *
 *    table.row.add( new_row ).draw().show().draw(false);
 */
DataTable.Api.register('row().show()', function () {
    var page_info = this.table().page.info();
    // Get row index
    var new_row_index = this.index();
    // Row position
    var row_position = this.table()
        .rows({ search: 'applied' })[0]
        .indexOf(new_row_index);
    // Already on right page ?
    if ((row_position >= page_info.start && row_position < page_info.end) ||
        row_position < 0) {
        // Return row object
        return this;
    }
    // Find page number
    var page_to_display = Math.floor(row_position / this.table().page.len());
    // Go to that page
    this.table().page(page_to_display);
    // Return row object
    return this;
});


return DataTable;
}));

		</script>
        </head>
