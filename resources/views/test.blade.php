@include('header')
		
{{-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body> --}}


	@if(!empty($blogs))

		@foreach ($blogs as $blog)

				<a href="{{ route('blogs.detail',$blog->id) }}"><h4 style="color: black">{{$blog->title }}</h4></a>
				<div class="row">
					<div class="col-sm-4"><img class="img-responsive" src="{{asset($blog->image) }} " width="200px" height="100px" alt="">
					</div>
					<div class="col-sm-8">
						<a href="{{ route('blogs.detail',$blog->id) }}"><h5 style="color: black">{!!$blog->description !!}</h5></a>
						<h5>{!! str_limit($blog->content, $limit = 200, $end = '...')!!}</h5>
						<h5>{{$blog->created_at}}</h5>
					</div>
				</div>
				<hr>
		@endforeach 
	@endif
	{{ $blogs->links() }}
	@include('sidebar')
	@include('footer')
	
	</body>
</html>
