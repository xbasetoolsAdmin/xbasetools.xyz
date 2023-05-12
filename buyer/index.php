<?php
 include "header.php";
?>

<?php
 ob_start();
 session_start();
 date_default_timezone_set( 'UTC' );
 include "../includes/config.php";
 if ( !isset( $_SESSION[ 'sname' ] ) and !isset( $_SESSION[ 'spass' ] ) )
           {
           header( "location: ../" );
           exit( );
           } //
!isset( $_SESSION[ 'sname' ] ) and !isset( $_SESSION[ 'spass' ] )
 $usrid = mysqli_real_escape_string( $dbcon, $_SESSION[ 'sname' ] );
?>


		<style>
            .navbar {
                background-color: #001f3f;
            }
        </style>
<body style="padding-top: 70px; padding-bottom: 70px;">

 
</nav>
<div id="mainDiv">


</div>






<scripttype="text/javascript">
  function ajaxinfo() {
        $.ajax({
                type: 'GET'
                , url: 'ajaxinfo.html'
                , timeout: 10000
                , success: function (
                        data
                        ) {
                        if (data !=
                                '01'
                                ) {
                                var data =
                                        JSON
                                        .parse(
                                                data);
                                for (var prop in
                                        data) {
                                        $("#" + prop)
                                                .html(data[
                                                        prop])
                                                .show();
                                }
                        } else {
                                window.location =
                                        "logout.html";
                        }
                }
        });
}
setInterval(function () {
        ajaxinfo()
}, 3000);
ajaxinfo();
	</script>




<?php include"footer.pho";?>

