<?php 
if(isset($_POST['submit'])){
    function sound(){
		$txt1 = $_POST['text1'];
		$txt2 = $_POST['text2'];

		echo metaphone($txt1);
		echo "<br>";
		echo metaphone($txt2);
		echo "<br>";

		// echo soundex($txt1);
		// echo "<br>";
		// echo soundex($txt2);
		// echo "<br>";
	}
	sound();
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<title>Metaphone</title>
	<link rel="shortcut icon" href="tobechukwu.jpg">
	<meta charset="UTF-8">
	<meta name="view port" content="width=device-width,initial-scale=1.0">
	<meta name="Assignment" content="Ugwu Tobechukwu">

	<style>
		.submit{
			border-radius: 20px;
			background-color: steelblue;
			color: black;
		}

		.submit:hover{
			background-color: white;
		}
	</style>
</head>
<body>
	<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
		<input type="text" name="text1">
		<input type="text" name="text2">
		<input type="submit" name="submit" value="CLICK">
	</form>
</body>