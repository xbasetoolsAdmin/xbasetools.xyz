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
<?php
ob_start();
session_start();
error_reporting();
date_default_timezone_set('UTC');

if(!isset($_SESSION['sname']) and !isset($_SESSION['spass'])){
   header("location: ../");
   exit();
}
  include "../includes/config.php";
?>


<?php
	///////////////// premium
 if (
	 $row['type'] == "account") {
	 $itemid = $row['s_id'];
$qe = mysqli_query($dbcon, "SELECT * FROM accounts WHERE id='$itemid'") or die(mysql_error());
while ($rowe = mysqli_fetch_assoc($qe)) {

$country = $rowe['country'];
$site = $rowe['sitename'];
$description = $rowe['infos'];
$information = $rowe['url'];
$code = array_search("$country", $countrycodes);
 $countrycode = strtolower($code);
?>
                  <h4>PREMIUM</h4>


<table class="table">
<tr>
  <td>Country</td>
  <td><b><span class="flag-icon flag-icon-<?php echo htmlspecialchars($countrycode); ?>"></span> <?php echo htmlspecialchars($country); ?></b></td>
</tr>

  <tr>
  <td>Available Information</td>
  <td><b><?php echo htmlspecialchars($description); ?></b></td>
</tr>

  <tr>
  <td>Website</td>
  <td><b><a><?php echo htmlspecialchars($site); ?></a></b></td>
</tr>

  <tr>
  <td>Account Info</td>
  <td><b><textarea rows='10' cols='30' ><?php echo htmlspecialchars($information); ?></textarea></b></td>
</tr>

  		
</table>
<?php
}
	 }
	 //////////////End if premium
	 ?>
  $date = date("Y-m-d H:i:s");
  $uid = mysqli_real_escape_string($dbcon, $_GET['id']);
  $tbl = mysqli_real_escape_string($dbcon, $_GET['t']);
  $qqs = @mysqli_query($dbcon, "SELECT * FROM $tbl WHERE id='$uid'") or die();
  $rows = mysqli_fetch_assoc($qqs);

  $price = mysqli_real_escape_string($dbcon, $rows['price']);
  $type  = mysqli_real_escape_string($dbcon, $rows['acctype']);
  $fb  = mysqli_real_escape_string($dbcon, $rows['country']);
  $infos  = mysqli_real_escape_string($dbcon, $rows['infos']);
  $url  = mysqli_real_escape_string($dbcon, $rows['url']);
  $login  = mysqli_real_escape_string($dbcon, $rows['login']);
  $pa  = mysqli_real_escape_string($dbcon, $rows['pass']);
  $sid  = mysqli_real_escape_string($dbcon, $rows['id']);
  $resseller  = mysqli_real_escape_string($dbcon, $rows['resseller']);

  $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
  $qqs2 = @mysqli_query($dbcon, "SELECT * FROM users WHERE username='$usrid'") or die();
  $rows2 = mysqli_fetch_assoc($qqs2);

  $balance =  $rows2['balance'];
  $ipur =   $rows2['ipurchassed'];

  if($balance >= $price){
    $newb = $balance - $price;
    $newb2 = mysqli_real_escape_string($dbcon, $newb);
    $re = mysqli_query($dbcon, "SELECT sold FROM $tbl WHERE id='$uid'");
    $ree = mysqli_fetch_assoc($re);
    if($ree['sold'] == '0'){
           $npur = $ipur + 1 ;
			mysqli_query($dbcon, "UPDATE $tbl SET sold='1', sto='$usrid', dateofsold='$date', resseller='$resseller' WHERE id='$uid'");
			mysqli_query($dbcon, "UPDATE users SET balance='$newb2' WHERE username='$usrid'");
			mysqli_query($dbcon, "UPDATE users SET ipurchassed='$npur' WHERE username='$usrid'");
			
      
      mysqli_query($dbcon, "INSERT INTO purchases
            (s_id,buyer,date,type,country,infos,url,login,pass,price,resseller,reported,reportid)
            VALUES
            ('$sid','$usrid','$date','$type','$fb','$infos','$url','$login','$pa','$price','$resseller','','')
            ");
            $last_id = mysqli_insert_id($dbcon);
         $b = $price;
         mysqli_query($dbcon, "UPDATE resseller SET allsales=(allsales + $b),soldb=(soldb + $b) WHERE username='$resseller'");

	    echo '<button onclick="openitem('.$last_id.')" class="btn btn-primary btn-xs"> Order #'.$last_id.'</button>';
		
    }else{
      echo 'Already sold / Deleted.' ;
    }
  }else{
      echo 'Please top-up your balance to buy.' ;
       }

?>
