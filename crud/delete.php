
<?php
include 'connection.php';
$idth = $_GET['id'];

$deletequery = "delete from jobregistration where id = {$idth}";

$query = mysqli_query($con,$deletequery);

if ($query) {
	?>
	<script>
		alert("Deleted Successfully");
	</script>
	<?php
}
else{
	?>
   <script>
   	alert("Not Deleted");
</script>
<?php
}
header("location:display.php");
?>