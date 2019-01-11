<html>
<head>
	<title>Expenses List</title>
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
	<?php require_once('assets/partials/nav.php'); ?>
	<h1>Expenses entered by users</h1>
	<hr>
	<table>
		<tr>
			<th>ID</th>
			<th>Gender</th>
			<th>Year</th>
            <th>Age</th>
            <th>Clothes</th>
            <th>Food</th>
            <th>Transportation</th>
            <th>Utilities</th>
            <th>Entertainment</th>
            <th>Travel</th>
		</tr>

	<?php
		//while in the table, get the json data
		$d = file_get_contents('assets/data.json');
		//convert the data to a php array so we can work with it
		$d = json_decode($d, true);
		
		//loop through the data to create dynamic html
		foreach($d as $k => $o){
			//for each object in our data, create a table row with table cells. in each table cell, concatenate values from the object we are looping through
			echo '<tr>
					<td>'.++$k.'</td>
					<td>'.$o['gender'].'</td>
					<td>'.$o['year'].'</td>
                    <td>'.$o['age'].'</td>
                    <td>'.$o['clothes'].'</td>
                    <td>'.$o['food'].'</td>
                    <td>'.$o['transport'].'</td>
                    <td>'.$o['util'].'</td>
                    <td>'.$o['entertainment'].'</td>
                    <td>'.$o['travel'].'</td>
				</tr>';
		}
	?>

	</table>
	<hr>
	<?php require_once('assets/partials/footer.php'); ?>
</body>
</html>