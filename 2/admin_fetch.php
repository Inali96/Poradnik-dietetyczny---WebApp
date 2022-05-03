<?php

//user_fetch.php

include('db.php');

$query = '';

$output = array();

$query .= "
SELECT * FROM uzytkownicy2 
WHERE rola = 'A'  AND";

if(isset($_POST["search"]["value"]))
{
	$query .= '(imie LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR email LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR login LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR status LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR rola LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR id LIKE "%'.$_POST["search"]["value"].'%") ';
}

if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY id DESC ';
}

if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

$filtered_rows = $statement->rowCount();

foreach($result as $row)
{
	$status = '';
	if($row["status"] == 'Aktywny')
	{
		$status = '<span class="label label-success">Aktywny</span>';
	}
	else
	{
		$status = '<span class="label label-danger">Nieaktywny</span>';
	}
	$sub_array = array();
	$sub_array[] = $row['id'];
	$sub_array[] = $row['imie'];
	$sub_array[] = $row['email'];
	$sub_array[] = $row['login'];
	$sub_array[] = $row['rola'];
	$sub_array[] = $status;
	$sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-xs update">Edytuj</button>';
	$sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete" data-status="'.$row["status"].'">Zmień status</button>';
		$sub_array[] = '<button type="button" name="delete2" id="'.$row["id"].'" class="btn btn-danger btn-xs delete2" >Usuń konto</button>';
	$data[] = $sub_array;
}

$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"  	=>  $filtered_rows,
	"recordsFiltered" 	=> 	get_total_all_records($connect),
	"data"    			=> 	$data
);
echo json_encode($output);

function get_total_all_records($connect)
{
	$statement = $connect->prepare("SELECT * FROM uzytkownicy2 WHERE rola='A' AND");
	$statement->execute();
	return $statement->rowCount();
}

?>