@include('layouts.Plane')
@include('layouts.Dashboard')
<div>
	{{-- <h2>DANH SACH...............</h2> --}}
	<h3>aaaaaa</h3>
	<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS & JS -->
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
	<a href=""><button type="button" class="btn btn-default btn-info" >Them moi</button></a>

	<table class="table table-hover">

		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Action</th>

			</tr>
		</thead>
		<tbody>
			
			@if(!empty($users))
				@foreach ($users as $user)
				<tr>
					<td>{{$user->id }}</td>
					<td>{{$user->name }}</td>
					<td>{{$user->email }}</td>

					<td><a href=""><button type="button" 
					class="btn btn-default btn-info">Xem</button></a>
					<a href=""><button type="button" class="btn btn-default btn-warning">Sửa</button></a>
					<form method="POST" style="display: inline-block;" action="{{route('blogs.destroy',$blog->id) }}">
								{{csrf_field()}}

								<input type="hidden" name="_method" value="DELETE">
								<button type="submit" >xoa</button>
					</form>
					</td>
				</tr>
			@endforeach @endif
		</tbody>
			
	</table>
</body>
</html>
</div>