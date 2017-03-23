<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
	<link rel="stylesheet" type="text/css" href="/Bootstrap/css/bootstrap.min.css">
</head>
<body> <center>
<h1>EDIT User</h1>
<form method="POST" action="/save-edit">
{{ csrf_field() }}
	<input type="text" name="id" value="{{ $student->id }}" hidden>
	Name: <input type="text" name="name" value="{{ $users->name }}"><br>
	Email: <input type="text" name="email" value="{{ $users->email }}"><br>
	Password: <input type="text" name="password" value="{{ $users->password }}"><br>
	<button class="btn btn-success">Save</button>
</form>
</center>

</body>
</html>