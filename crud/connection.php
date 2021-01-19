
<?php
$username = "root";
$password = "";
$server = 'localhost';
$db = 'crud';

$con = mysqli_connect($server,$username,$password,$db);
if ($con){
	//echo "connection Successful";
	?>
	<script> 
	alert("connection Successful"); 
	</script>
	
	<?php
}
else{ //echo "No connection";
	die("no connection".mysqli_connect_error());
}
?>