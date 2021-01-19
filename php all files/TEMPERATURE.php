<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		*{margin: 0; padding: 0; box-sizing: border-box;}
		h1{text-align: center; line-height: 20vh; color: #6c63ff;}
		.main_div{width: 100%; height: 80vh; display: flex;
				  justify-content: space-around; align-items: center;}

		.left_side{background-color: #6c63ff;border-radius: 87% 13% 42% 58% / 63% 36% 64% 37% ;}
		.left_side img{max-width: 400px; height: auto;}
		.right_side{width: 400px; height: 300px; background-color: #FAEBD7;
					border-radius: 15px; /*display-radius:15px;*/ display: flex;
					justify-content: center; align-items: center; flex-direction: column;
					text-align: center;}

		input{width: 250px; height: 40px; padding: 5px; outline: none; border-radius: 1px solid grey;
				border-radius: 5px;}

		.selection{width: 10px; margin:10px 0;}
		.btn{padding: 10px 16px; border-radius: 5px; outline: none;border:none; background-color: #6c63ff;
			font-size: 0.9rem;}

		p{margin: 20px 0 0 0;}

		.left_side img{animation: blinker 2s linear infinite;}
         @keyframes blinker{0%{ opacity: 0; }
     						}		  
	</style>
</head>
<body>
<header>
	<h1>Temperature Conversion</h1>
	<div class="main_div">
		<div class="left_side">
			<img src="https://cdn.iconscout.com/icon/free/png-256/sun-behind-cloud-1671391-1422398.png">
		</div>
		<div class="right_side">
			<form method="POST">
				<input type="text" name="num" placeholder="Enter Your Number" class="input1">
				<div class="selection">
					<label>Celc</label>
					<input type="radio" name="units" value="cel">
					<label>Faren</label>
					<input type="radio" name="units" value="feh">
				</div>
				<input type="submit" name="submit" value="convert Now" class="btn">
			</form>
			<div>
				<p>
					<?php
					if (isset($_POST['submit'])) {
						$num = $_POST['num'];
						$temp = $_POST['units'];

						if ($temp == "cel") {
							$result =$num * 9/5 + 32;
							echo "The Conversion value of Cel in Faren is ".$result;
						}
						else{$result =($num -32)* 5/9;
							echo "The Conversion value of Faren in Cel is ".$result;}

					}
					?>

				</p>
			</div>
		</div>
	</div> 
</header>
</body>
</html>