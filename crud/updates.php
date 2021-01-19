
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <?php include 'links.php' ?>
  <?php include 'CSS/style.css' ?>
  
</head>
<body>

<div class="container register">
	<div class="row">
		<div class="col-md-3 register-left">
			<img src="#" alt="#" />
			<h3>Welcome</h3>
			<p> Please fill all the details carefully.This form can change your life</p>
			<a href="display.php ">Check Form </a>
			<br/>
		</div>
		<div class="col-md-9 register-right">
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<h3 class="register-heading">Apply for Web Development Post</h3>
					<form action="" method="POST">
						<div class="row register-form">
					
					<?php
							include 'connection.php';
							$ids = $_GET['id'];
							$showquery = "select * from jobregistration where id={$ids}";
							$showdata = mysqli_query($con,$showquery);

							$arrdata = mysqli_fetch_array($showdata);

							if (isset($_POST['submit'])) {
								$name = $_POST['user'];
								$degree = $_POST['degree'];
								$mobile = $_POST['mobile'];
								$email = $_POST['email'];
								$refer = $_POST['refer'];
								$jobprofile = $_POST['jobprofile'];

								$insertquery = "insert into jobregistration(name,degree,mobile,email,refer,jobpost)
												value('$name','$degree','$mobile','$email','$refer','$jobprofile')";
								$res = mysqli_query($con , $insertquery);

								if ($res) {
									?>
									<script>
										alert("Data inserted properly");
									</script>
									
									<?php
								}
								else{
									
									?>
									<script>
										alert("Data not inserted");
									</script>
									<?php
								}
							}
					?>							
							
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="enter your name *" name="user" 
									value="<?php echo $arrdata['name'] ?>" required/>
								</div>
								<div class="form-group">
								    <input type="tel" class="form-control" placeholder="mobile number *" name="mobile" 
								    value="<?php echo $arrdata['mobile'] ?>" required/>
								</div>
							   <div class="form-group">
								    <input type="text" class="form-control" placeholder="any references *" name="refer" 
								    value="<?php echo $arrdata['refer'] ?>" required/>
							   </div>
		                    </div>
		                    <div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="enter your qualification *" name="degree" 
									value="<?php echo $arrdata['degree'] ?>" required/>
								</div>
								<div class="form-group">
								    <input type="email" class="form-control" placeholder="email id *" name="email" 
								    value="<?php echo $arrdata['email'] ?>" required/>
								</div>
							   <div class="form-group">
								    <input type="text" class="form-control" placeholder="Wed Development Post" name="jobprofile" 
								    value="web developer"/>
							   </div>
							   <input type="submit" name="submit" value="UPDATE" class="btnRegister" />
							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
		
	</div>
</div>

</body>
</html>



