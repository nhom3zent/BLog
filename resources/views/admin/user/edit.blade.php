<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<form action="{{route('users.update',$user->id)}}" method="POST" role="form">
		<legend>Form title</legend>
		{{csrf_field()}}

		<div>
			<input type="hidden" name="_method" value="PUT">

		</div>

		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control" id="name" placeholder="Input field" name="name" value="{{$user->name}}">
		</div>
	
		<div class="form-group">
			<label for="">Email</label>
			<input type="text" class="form-control" id="email" placeholder="Input field" name="email" value="{{$user->email}}">
		</div>
		<div class="form-group">
			<label for="">Password</label>
			<input type="text" class="form-control" id="password" placeholder="Input field" name="password" value="{{$user->password}}">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</body>
</html>