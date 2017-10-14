@include('Header')

<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>			
	@if(!empty($blogs))
		@foreach ($blogs as $blog)

				<a href="{{ route('blogs.detail',$blog->id) }}"><h3 style="color: black">{{$blog->title }}</h3></a>
				<div class="row">
					<div class="col-sm-4"><img class="img-responsive" src="{{asset($blog->image) }} " width="200px" height="100px" alt=""></div>
					<div class="col-sm-8"><a href="{{ route('blogs.detail',$blog->id) }}"><h4 style="color: black">{{$blog->description }}</h4></a></div>
				</div>
				
				<h4>{{$blog->content}}</h4>
				<hr>
		@endforeach 
	@endif 
	{{ $blogs->fragment('foo')->render() }}
</body>
</html>
@include('SideBar')
@include('Footer')