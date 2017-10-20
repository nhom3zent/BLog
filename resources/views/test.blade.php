
<!DOCTYPE html>
<html>
@include('header_2')

<body>			

@include('sidebar_2')


@if(!empty($blogs))

		@foreach ($blogs as $blog)

				<a href="{{ route('blogs.detail',$blog->id) }}"><h3 style="color: black">{{$blog->title }}</h3></a>
				<div class="row">
					<div class="col-sm-4"><img class="img-responsive" src="{{asset($blog->image) }} " width="200px" height="100px" alt=""></div>
					<div class="col-sm-8"><a href="{{ route('blogs.detail',$blog->id) }}"><h4 style="color: black">{{$blog->description }}</h4></a></div>
				</div>
				<h5>{{$blog->content}}</h5>
				<hr>

		@endforeach 
	@endif
	{{-- {{ $blogs->fragment('foo')->render() }} --}}

{{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. --}}
</body>
</html>
@include('footer_2')x