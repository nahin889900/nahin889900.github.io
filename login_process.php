<?php

session_start();

include("includes/config.php");

$username=$_POST['username'];

$password=md5($_POST['password']);

$sql="SELECT * FROM admin
WHERE username='$username'
AND password='$password'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{

$_SESSION['admin']=$username;

header("Location: dashboard.php");

}

else
{

echo "<script>

alert('Invalid Username or Password');

window.location='login.php';

</script>";

}

?>
