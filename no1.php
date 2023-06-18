<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INPUT FORM No1</title>
</head>
<body>
<form action="no1.php" method="post">
    Number first: <input type="number" name="firstNumber"><br>
    Number Second: <input type="number" name="secondNumber"><br>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstNumber = $_POST["firstNumber"];
    $secondNumber = $_POST["secondNumber"];

    $result = $firstNumber + $secondNumber;

    echo "<h1>Result is: $result</h1>";
}
?>

</body>
</html>
