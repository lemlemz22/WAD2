!DOCTYPE html>
<html>
<head>
	<title>All Users</title>
	<link rel="stylesheet" type="text/css" href="/Bootstrap/css/bootstrap.min.css">
<style>
	
th{
	text-align: center;
}	
</style>

</head>
<body>
<center>
	<table class="table-bordered table-hover table" style="text-align:center">
		<thead>
			<tr>
				<th hidden> ID </th>
				<th> Name </th>
				<th> Email </th>
				<th> Password </th>
				<th> Options </th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($users as $user):
			?>
			<tr>
				<td hidden>$users->id ?> </td>
				<td> {{ $users->name }}</td>
				<td> {{ $users->email }}</td>
				<td> {{ $users->password }} </td>
				<td>
					<a href="/edit/{{ $users->id }}">
						<button class="btn btn-success" class="fa fa-pencil">Edit</button>
						</a>
					<a href="/delete/{{ $users->id }}">
						<button class="btn btn-danger" class="fa fa-trash">Delete</button>
					</a>
						
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<br>
</center>
</body>
</html>