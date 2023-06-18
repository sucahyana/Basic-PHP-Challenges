<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SOAL NOMOR 2</title>
</head>
<body>


<form action="no2.php" method="post">
    input Words : <input type="text" name="userWords"><br>
    <input type="submit" value="Check Word">

	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$userWords = $_POST['userWords'];
		$revstring = strrev($userWords);

		if ($revstring == $userWords) {
			echo "<h1>ini adalah kata palindrom</h1>";
		} else {
			echo "<h1>Ini bukan kata palindrom</h1>";
		}

	}
	?>


</body>
</html>