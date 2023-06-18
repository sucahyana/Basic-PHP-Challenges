<?php
//Buatlah program PHP yang menerima input bilangan bulat positif dan menampilkan semua faktor dari bilangan tersebut.//

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SOAL NOMOR 3</title>
</head>
<body>
<form action="no3.php" method="post">
    INPUT BILANGAN BULAT: <input type="number" name="userNumber"><br>
    <input type="submit" value="Lets SEE">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$userNumber = $_POST['userNumber'];

	function ganjilGenapNumber($value)
	{
		if ($value % 2 == 0) {
			echo "INI ADALAH BILANGAN GENAP";
		} else {
			echo "INI ADALAH BILANGAN GANJIL";
		}
	}

	function positiveNegativeNumber($value)
	{
		if ($value < 0) {
			echo "INI JUGA BILANGAN NEGATIVE";
		} else {
			echo "INI JUGA BILANGAN POSITIVE";

		}
	}

	function factorFinder($value)
	{
		$factor = [];

		for ($seed = 1; $seed <= $value; $seed++) {

			if ($value % $seed == 0) {
				$factor[] = $seed;
			}
		}

		return $factor;
	}
    $resultFactor= factorFinder($userNumber);
	echo "<h1>Factors of $userNumber: </h1>";


	foreach ($resultFactor as $factor) {
		echo $factor . " ";
	}
	$resultGanjilGenap = ganjilGenapNumber($userNumber);
    $resultPositiveNegative = positiveNegativeNumber($userNumber);
    echo "<p>$resultGanjilGenap<br>$resultPositiveNegative</p>";

}

?>


</body>
</html>
