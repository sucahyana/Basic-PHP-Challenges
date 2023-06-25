<?php
function generateFibonacci($n)
{
	$fibonacci = [];

	if ($n >= 1) {
		$fibonacci[] = 0;
	}
	if ($n >= 2) {
		$fibonacci[] = 1;
	}

	for ($i = 2; $i < $n; $i++) {
		$fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
	}

	return $fibonacci;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$n = $_POST['n'];

	if (is_numeric($n) && $n > 0) {
		$fibonacciSequence = generateFibonacci($n);
	} else {
		$error = 'tolong tulis integerr positive.';
	}
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fibonacci Sequence</title>
</head>
<body>
<h1>Fibonacci Sequence</h1>

<form action="" method="post">
	<label for="n">masukan number fibbonaci:</label>
	<input type="number" name="n" id="n" required>
	<input type="submit" value="Generate">
</form>

<?php if (isset($fibonacciSequence)): ?>
	<?php if (!empty($fibonacciSequence)): ?>
		<ul>
			<?php foreach ($fibonacciSequence as $number): ?>
				<li><?php echo $number; ?></li>
			<?php endforeach; ?>
		</ul>
	<?php else: ?>
		<p>error.</p>
	<?php endif; ?>
<?php elseif (isset($error)): ?>
	<p><?php echo $error; ?></p>
<?php endif; ?>
</body>
</html>
