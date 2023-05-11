
<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=xbaseleets_xbaseleets", "xbaseleets_xbaseleets", "xbaseleets_xbaseleets");

$column = array("id", "country", "price", "infos", "sitename");

$q = "SELECT * FROM accounts ";

if(isset($_POST["search"]["value"]))
{
	$q .= '
	WHERE id LIKE "%'.$_POST["search"]["value"].'%" 
	OR country LIKE "%'.$_POST["search"]["value"].'%" 
	OR price LIKE "%'.$_POST["search"]["value"].'%" 
	OR infos LIKE "%'.$_POST["search"]["value"].'%" 
	OR sitename LIKE "%'.$_POST["search"]["value"].'%" 
	';
}

if(isset($_POST["order"]))
{
	$q .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$q .= 'ORDER BY id DESC ';
}

$q1 = '';

if($_POST["length"] != -1)
{
	$q1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($q);

$statement->execute();

$number_filter_row = $statement->rowCount();

$result = $connect->q($q . $q1);

$data = array();

foreach($result as $row)
{
	$sub_array = array();
	$sub_array[] = $row['id'];
	$sub_array[] = $row['country'];
	$sub_array[] = $row['infos'];
	$sub_array[] = $row['price'];
	$sub_array[] = $row['reseller'];
	$sub_array[] = $row['sitename‘];
	$sub_array[] = $row[‘date’];
	$data[] = $sub_array;
}

function count_all_data($connect)
{
	$q = “SELECT * FROM accounts”;

	$statement = $connect->prepare($q);

	$statement->execute();

	return $statement->rowCount();
}

$output = array(
	“draw”		=>	intval($_POST[“draw”]),
	“recordsTotal”	=>	count_all_data($connect),
	“recordsFiltered”	=>	$number_filter_row,
	“data”	=>	$data
);

echo json_encode($output);

?>


