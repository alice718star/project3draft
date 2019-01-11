<html>
<head>
	<title>Spending Widget</title>
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
	<?php require_once('assets/partials/nav.php'); ?>
	<h1>Enter Your Expenses for the Selected Year</h1>
	<hr>
	<form action="assets/process.php" method="post">
        <label>
            <input type="radio" name="gender" value="Male">Male
        </label>
        <label>
            <input type="radio" name="gender" value="Female">Female
        </label>
        <label>
            <input type="radio" name="gender" value="Self-Identify">Self-Identify
        </label>
        <br>
        <label>
            <input type="radio" name="year" value="2016">2016
        </label>
        <label>
            <input type="radio" name="year" value="2017">2017
        </label>
        <label>
            <input type="radio" name="year" value="2018">2018
        </label>
        <br>
        <label>
            <input type="radio" name="age" value="18-24">18-24
        </label>
        <label>
            <input type="radio" name="age" value="25-34">25-34
        </label>
        <label>
            <input type="radio" name="age" value="35-44">35-44
        </label>
        <label>
            <input type="radio" name="age" value="45-54">45-54
        </label>
        <label>
            <input type="radio" name="age" value="55-64">55-64
        </label>
        <label>
            <input type="radio" name="age" value="65-74">65-74
        </label>
        <label>
            <input type="radio" name="age" value="75 or older">75 or older
        </label>
        <br>
        <input type="number" name="clothes">Clothes
        <br>
        <input type="number" name="food">Food
        <br>
        <input type="number" name="transport">Transportation
        <br>
        <input type="number" name="transport">Utilities
        <br>
        <input type="number" name="entertainment">Entertainment
        <br>
        <input type="number" name="entertainment">Travel
		<br>
		<input type="submit" value="submit">
	</form>
	<hr>
	<?php require_once('assets/partials/footer.php'); ?>
</body>
</html>