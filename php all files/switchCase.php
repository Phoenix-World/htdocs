<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="POST">Enter Your Fav-Color:
	<br>
	<br>
	<input type="text" name="favcolor">
	<br><br>
<input type="submit" name="submit" value="checkNow">
</form>
<p>
	<?php
	if (isset($_POST['submit'])) {
		$favcolor = $_POST['favcolor'];

		switch ($favcolor) {
			case 'blue': 
						echo "Your fav color is Blue";
			    break;
			case 'red':
						echo "Your fav color is Red";
				break;
			case 'green':
						  echo "Your fav color is Green";
				break;

			
			default:
				    echo "Sorry , I am not sure about Your fav color";
				break;
		}
	}

	?>
</p>

</body>
</html>









