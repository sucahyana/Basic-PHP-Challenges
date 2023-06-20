<!--. Buatlah program PHP yang mengonversi suhu dari Celcius ke Fahrenheit atau sebaliknya.
Program tersebut harus menerima input suhu dan menampilkan hasil konversi di browser.-->

<?php
function convertTemperature($temperature, $unit)
{
	if ($unit === 'C') {
		return ($temperature * 9/5) + 32;
	} elseif ($unit === 'F') {
		return ($temperature - 32) * 5/9;
	} else {
		return null;
	}
}

$result = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$temperature = $_POST['temperature'];
	$unit = $_POST['unit'];

	$result = convertTemperature($temperature, $unit);
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Temperature Converter</title>
</head>
<body>
<h1>Temperature Converter</h1>
<form action="" method="post">
	<label for="temperature">Temperature:</label>
	<input type="number" name="temperature" id="temperature" required>
	<br>
	<label for="unit">Unit:</label>
	<select name="unit" id="unit">
		<option value="C">Celcius</option>
		<option value="F">Fahrenheit</option>
	</select>
	<br>
	<input type="submit" value="Convert">
</form>

<?php if ($result !== null): ?>
	<h2>Result:</h2>
	<p><?php echo $temperature . ' ' . $unit . ' is ' . $result . ' ' . ($unit === 'C' ? 'Fahrenheit' : 'Celcius'); ?></p>
<?php endif; ?>
</body>
</html>
