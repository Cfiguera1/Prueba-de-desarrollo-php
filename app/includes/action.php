
<?php

//action.php

$connect = new PDO("mysql:host=localhost;dbname=laravel", "root", "");

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'fetch')
	{
		$order_column = array('nombreIndicador', 'valorIndicador', 'fechaIndicador');

		$main_query = "
		SELECT nombreIndicador, SUM(valorIndicador) AS valorIndicador, fechaIndicador
		FROM pruebas 
		";

		$search_query = 'WHERE fechaIndicador <= "'.date('Y-m-d').'" AND ';


		if(isset($_POST["search"]["value"]))
		{
			$search_query .= '(nombreIndicador LIKE "%'.$_POST["search"]["value"].'%" OR valorIndicador LIKE "%'.$_POST["search"]["value"].'%" OR fechaIndicador LIKE "%'.$_POST["search"]["value"].'%")';
		}

		$group_by_query = " GROUP BY fechaIndicador ";

		$order_by_query = "";

		if(isset($_POST["order"]))
		{
			$order_by_query = 'ORDER BY '.$order_column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
		}
		else
		{
			$order_by_query = 'ORDER BY fechaIndicador DESC ';
		}

		$limit_query = '';

		if($_POST["length"] != -1)
		{
			$limit_query = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}

		$statement = $connect->prepare($main_query . $search_query . $group_by_query . $order_by_query);

		$statement->execute();

		$filtered_rows = $statement->rowCount();

		$statement = $connect->prepare($main_query . $group_by_query);

		$statement->execute();

		$total_rows = $statement->rowCount();

		$result = $connect->query($main_query . $search_query . $group_by_query . $order_by_query . $limit_query, PDO::FETCH_ASSOC);

		$data = array();

		foreach($result as $row)
		{
			$sub_array = array();

			$sub_array[] = $row['nombreIndicador'];

			$sub_array[] = $row['valorIndicador'];

			$sub_array[] = $row['fechaIndicador'];

			$data[] = $sub_array;
		}

		$output = array(
			"draw"			=>	intval($_POST["draw"]),
			"recordsTotal"	=>	$total_rows,
			"recordsFiltered" => $filtered_rows,
			"data"			=>	$data
		);

		echo json_encode($output);
	}
}

?>
