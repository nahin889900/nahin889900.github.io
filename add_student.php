<?php
session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: login.php");
}

include("includes/config.php");

if(isset($_POST['save']))
{

$student_id=$_POST['student_id'];
$name=$_POST['name'];
$department=$_POST['department'];
$semester=$_POST['semester'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$photo=$_FILES['photo']['name'];
$tmp=$_FILES['photo']['tmp_name'];

move_uploaded_file($tmp,"uploads/".$photo);

$sql="INSERT INTO students(student_id,name,department,semester,email,phone,photo)

VALUES('$student_id','$name','$department','$semester','$email','$phone','$photo')";

mysqli_query($conn,$sql);

echo "<script>
alert('Student Added Successfully');
window.location='students.php';
</script>";

}
?>

<!DOCTYPE html>
<html>

<head>

<title>Add Student</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="card">

<div class="card-header bg-primary text-white">

<h3>Add Student</h3>

</div>

<div class="card-body">

<form method="POST" enctype="multipart/form-data">

<label>Student ID</label>

<input
type="text"
name="student_id"
class="form-control"
required>

<br>

<label>Name</label>

<input
type="text"
name="name"
class="form-control"
required>

<br>

<label>Department</label>

<input
type="text"
name="department"
class="form-control"
required>

<br>

<label>Semester</label>

<select
name="semester"
class="form-control">

<option>1st</option>
<option>2nd</option>
<option>3rd</option>
<option>4th</option>
<option>5th</option>
<option>6th</option>
<option>7th</option>
<option>8th</option>

</select>

<br>

<label>Email</label>

<input
type="email"
name="email"
class="form-control">

<br>

<label>Phone</label>

<input
type="text"
name="phone"
class="form-control">

<br>

<label>Photo</label>

<input
type="file"
name="photo"
class="form-control">

<br>

<button
class="btn btn-success"
name="save">

Save Student

</button>

<a
href="students.php"
class="btn btn-secondary">

Back

</a>

</form>

</div>

</div>

</div>

</body>

</html>
