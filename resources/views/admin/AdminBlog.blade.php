@extends('layouts.Dashboard')
@section('page_heading')
<span>Danh sách bài đăng</span>
@stop
@section('section')
<div>
	<a href="{{ route('blog.create') }}"><button type="button" class="btn btn-default btn-info" >Add</button></a>

	<table class="table table-hover">

		<thead>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Image</th>
				<th>Description</th>
				<th>Content</th>
				<th>Action</th>

			</tr>
		</thead>
		<tbody>
			
			@if(!empty($blogs))
				@foreach ($blogs as $blog)
				<tr>
					<td>{{$blog->id }}</td>
					<td>{{$blog->title }}</td>
					<td>
						<img style="width: 200px; height: 200px;" src="{{ $blog->image }}" alt="">
					</td>
					<td>{{$blog->description }}</td>
					<td>{{$blog->content }}</td>

					<td>
<<<<<<< HEAD
						<a href="{{-- {{ route('blog.show', $blog->id) }} --}}">
							<button type="button" class="btn btn-default btn-success">Xem</button>
						</a>
						<a href="{{-- {{ route('blog.edit', $blog->id) }} --}}">
							<button type="button" class="btn btn-default btn-warning">Sửa</button>
						</a>
						<form method="POST" style="display: inline-block;" action="{{-- {{ route('blog.delete', $blog->id) }} --}}">
=======
						<a href="{{ route('blog.show', $blog->id) }}">
							<button type="button" class="btn btn-default btn-success">Xem</button>
						</a>
						<a href="{{ route('blog.edit', $blog->id) }}">
							<button type="button" class="btn btn-default btn-warning">Sửa</button>
						</a>
						<form method="POST" style="display: inline-block;" action="{{ route('blog.delete', $blog->id) }}">
>>>>>>> ed35c1529e8a30a58514b32a5257d6c4b3d3fdf0
							{{csrf_field()}}
							<input type="hidden" name="_method" value="DELETE">
							<button type="submit" class="btn btn-default btn-danger" >xoa</button>
						</form>
					</td>
				</tr>
			@endforeach @endif
		</tbody>
	</table>
	{{$blogs->links()}}
</html>
</div>
@stop