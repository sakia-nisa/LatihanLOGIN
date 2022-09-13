<?php
session_start();
if(!$_SESSION['user']){
    header('location:select.php');
}
?>
<html>
<h1>SELAMAT DATANG, <?php echo $_SESSION['user']; ?> di XII RPL 1</h1>
<br>
<br>
<form method="POST">

<input type="submit" name="logOut" value="logOut" />
</form>
</html>
<?php 
if (isset($_POST['logOut'])){
    session_unset($_SESSION['user']);
    header("location:select.php");
}
?>