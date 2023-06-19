<!---->
<!--/*Tuliskan program PHP untuk menghasilkan pola segitiga angka seperti berikut ini:-->
<!---->
<!--```-->
<!--1-->
<!--22-->
<!--333-->
<!--4444-->
<!--55555-->
<!---->

<?php
$limit = 5;

for ($i = 1; $i <= $limit; $i++) {
	echo str_repeat($i, $i) . "<br>";
}
