<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add User</title>
	<link rel="stylesheet" type="text/css" href="/Bootstrap/css/bootstrap.min.css">
</head>

<body>
<center>
	<h1>Student Registration Form</h1>
	<br>
		<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
		{{ csrf_field() }}

		<div class="form-group"><label class="control-label">Full Name: <input type="text" name="full_name"></label></div>
		<div class="form-group"><label class="control-label">Course: <input type="text" name="course"></label></div>
				Student Number: <input type="number" name="student_number"> <br><br>
				<button type="submit" class="btn btn-primary">Register</button> </form><br>

	<a href="/show-list"><button class="btn btn-success" type="submit">All Students</button></a> 
</center>
</body>
</html>