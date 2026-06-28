<?php

session_start();

if(!isset($_SESSION['admin']))
{

header("Location: login.php");

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-dark bg-dark">

<div class="container">

<span class="navbar-brand">

AI Attendance System

</span>

<a href="logout.php" class="btn btn-danger">

Logout

</a>

</div>

</nav>

<div class="container mt-5">

<h2>

Welcome,
<?php echo $_SESSION['admin']; ?>

</h2>

<hr>

<div class="row">

<div class="col-md-3">

<div class="card">

<div class="card-body">

<h4>Total Students</h4>

<h2>0</h2>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card">

<div class="card-body">

<h4>Today's Attendance</h4>

<h2>0</h2>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card">

<div class="card-body">

<h4>Present</h4>

<h2>0</h2>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card">

<div class="card-body">

<h4>Absent</h4>

<h2>0</h2>

</div>

</div>

</div>

</div>

</div>

</body>

</html>
