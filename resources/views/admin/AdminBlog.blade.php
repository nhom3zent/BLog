@extends('layouts.Dashboard')
@section('page_heading')
<span>Danh sách bài đăng</span>
@stop
@section('section')
<div>
	<a href=""><button type="button" class="btn btn-default btn-info" >Add</button></a>

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
					<td>{{ asset($blog->image) }}</td>
					<td>{{$blog->description }}</td>
					<td>{{$blog->content }}</td>

					<td><a href=""><button type="button" 
					class="btn btn-default btn-success">Xem</button></a>
					<a href=""><button type="button" class="btn btn-default btn-warning">Sửa</button></a>
					<form method="POST" style="display: inline-block;" action="">
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