<!--Tuliskan program PHP untuk menentukan apakah sebuah bilangan bulat adalah bilangan prima atau bukan.-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SOAL NOMOR 6</title>
</head>
<body>
<form action="no6.php" method="post">
    Input Number : <input type="number" name="primaNumber"><br>
    <input type="submit" value="Prima CHECk">
</form>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$userNumber = $_POST["primaNumber"];
	for ($i = 1; $i <= 50; $i++) {
		$a = 0;
		for ($j = 1; $j <= $i; $j++) {
			if ($i % $j == 0) {
				$a++;
			}
		}

	}
	$angka    =$userNumber;
	$hasil    =true;
	for($i=2;$i<$angka; $i++){
		if ($angka % $i == 0)
			$hasil    =false;
	}
	echo 'Angka <b>'.$angka.'</b>';
	echo $hasil ? 'termasuk bilangan prima' : ' bukan bilangan prima';
}
?>


</body>
</html>