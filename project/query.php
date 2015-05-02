<!DOCTYPE html>
<html>
<?php
	include 'connection.php';
	$Email=$_POST['email'];
	$PWD=md5($_POST['password']);
	$query="SELECT * FROM `Login` WHERE `EmailId` ='$Email' AND `Password` = '$PWD'";
	$result=mysql_query($query) or die(mysql_error());
	$count=mysql_num_rows($result);
	if($count==1){
		?> <script type="text/javascript">
			window.location.href="home.html"
			</script>
		<?php 
		}
		else{
			?><script type="text/javascript">
			alert("Invalid Username and Password!!")
			window.location.href="signin.php"
			</script>
		<?php 
		} 
?>
</html>
