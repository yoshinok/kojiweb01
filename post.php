<html>
<head><title>PHP TEST</title></head>
<body>

<form method="POST" action="./post.php">
<input type="text" name="text1">
<input type="submit" name="btn1" value="text1">
</form>

<?php

	if(isset($_POST['text1'])){
		$input_data = $_POST['text1'];
		print($input_data);
	}
?>

</body>
</html>
