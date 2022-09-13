<?php
session_start () ;
?>
<html>
<form method="POST">
	<input type="text" name="username" placeholder="username"> <br> <br>
	<input type="password" name="password_kamu" placeholder="password"> <br><br>
	<input type="submit" name="masuk" value="login">
</form>
</html>
<?php 
if (isset($_POST['masuk'])) {
	$username = $_POST['username'];
	$password_kamu = $_POST['password_kamu'];

	if ($username == 'sakia'){
	if ($password_kamu == '123'){
			$_SESSION['user'] = $username;
			header ('location: p.php');
		} else {
			echo "<script> alert ('PASSWORD SALAH ...'); </script>";
		}
	} else {
		echo "<script> alert ('USERNAME TIDAK TERDAFTAR !!!! '); </script>";
	}
}

?>