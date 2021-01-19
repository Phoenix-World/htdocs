<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		*{margin: 0; padding: 0; box-sizing: border-box;}
		.background{width:100vw; height: 100vh; background-color: #2980b9;
					display: flex; justify-content: center;align-items: center;}

		.container{width: 60vw; height: 60vh;background-color: #1abc9c;}
		
		.app-form{width:25vw; height:33vh;position: absolute; left: 52%; top: 40%; 
			  			 letter-spacing: 3px; font-size:20px;}

		.app-form-control:focus{border-bottom-color: #ddd; }
		.app-form-control::placeholder{color: #FFF;}

		.app-form-button{background-color: #33d9b2; border:none; color: #fff; 
						font-size: 14px; cursor: pointer; outline: none;
						padding: 10px 12px; border-radius: 5px; text-transform: uppercase;}

		.app-form-button:hover{color: #218c74;}
		.showdata{text-align: center; color: white;font-size: 1.2rem; padding-top: -10px; padding-bottom: 10px;}

		.app-form-group{width: 77%; background-color: rgba(255,255,255,0.3); border: none;
			outline: none; color: #582233; font-size: 1rem; height: 27px;
			border-radius: 5px; padding: 0 10px; text-align:center;}

	</style>
</head>
<body>
<div class="background">
	<div class="container">
		<div class="screen">
			<div class="screen-body">
				<div class="screen-body-itemleft">
					<div class="app-title">
						<div class="animated infinite pulse">
							PHP<br>Calculator<br>
						</div>
					</div>
				</div>
				<div class="screen-body-item">
					<div class="app-form">
						<form method="POST">
							<div class="app-form-group">
								<input type="text" name="num1" class="app-form-control" placeholder="Enter Number">
							</div>
							<div class="app-form-group">
								<input type="text" name="num2" class="app-form-control" placeholder="Enter Number">
							</div>
							<div class="select-style">
								<select name="operation">
									<option value="add">ADD</option>
									<option value="sub">SUB</option>
									<option value="mult">MULI</option>
									<option value="div">DIV</option>
								</select>
							</div>
							<div>
								<input type="submit" name="submit" value="submit" class="app-form-button">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="app-form-group showdata">
				<p>
					<?php
					if (isset($_POST['submit'])) {
						$num1= $_POST['num1'];
						$num2= $_POST['num2'];
						$operation = $_POST['operation'];

						switch ($operation) {
							case 'add':
								$sum = $num1 + $num2;
								echo "The addition of two number is {$sum}";
								break;

							case 'sub':
								$sub = $num1 - $num2;
								echo "The subtraction of two number is {$sub}";
								break;

							case 'mult':
								$mult = $num1 * $num2;
								echo "The multiplication of two number is {$mult}";
								break;

							case 'div':
								$div = $num1 / $num2;
								echo "The division of two number is {$div}";
								break;
							
							default:
								echo "Sorry its not exist";
								break;
						}
					}

					?>
				</p>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>