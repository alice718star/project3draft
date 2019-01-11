<html>
<head>
	<title>PHP and JSON Demo</title>
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
	<?php require_once('assets/partials/nav.php'); ?>
	<h1>Profiles</h1>
	<hr>
	<table>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>GENRE</th>
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
					<td>'.$o['name'].'</td>
					<td>'.$o['genre'].'</td>
				</tr>';
		}
	?>

	</table>
	<hr>
	<?php require_once('assets/partials/footer.php'); ?>
</body>
</html>