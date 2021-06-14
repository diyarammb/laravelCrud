<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
	     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
     <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.esm.min.js "></script>
 
</head>
<body>

	<h1 class="text-center border bg-success">{{session('user')}}</h1>
	<a href="/logout" class="btn btn-danger ms-4 ">
	Logout</a>
	<a href="/" class="btn btn-primary ms-4 ">Home</a>


<div class="container">
	<div class="row">
		<div class="col-6">
			<form action="{{url('adduser')}}">
				<label>Name</label>
				<input type="text" name="Name" class="form-control">
				<label>Email</label>
				<input type="email" name="email" class="form-control">
				<label>Status</label>
				<select name="status" class="form-control">
					<option>0</option>
					<option>1</option>
                  </select>

				<button type="submit" class="btn btn-primary mt-4">Add User</button>
				
			</form>
		</div>
	</div>
</div>




</body>
</html>