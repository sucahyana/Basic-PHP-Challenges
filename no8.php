<?php
function removeVowels($string)
{
	$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
	return str_replace($vowels, '', $string);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$inputString = $_POST['inputString'];

	$outputString = removeVowels($inputString);
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Remove Vowels</title>
</head>
<body>
<h1>Remove Vowels</h1>

<form action="" method="post">
	<label for="inputString">Enter a word or phrase:</label>
	<input type="text" name="inputString" id="inputString" required>
	<input type="submit" value="Remove Vowels">
</form>

<?php if (isset($outputString)): ?>
	<p>Original: <?php echo $inputString; ?></p>
	<p>Without Vowels: <?php echo $outputString; ?></p>
<?php endif; ?>
</body>
</html>
