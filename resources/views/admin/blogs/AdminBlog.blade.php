@extends('layouts.Dashboard')
@section('page_heading')
<span>Danh sách bài đăng</span>

@stop
@section('section')
<div>	
	@if (session()->has('message.level'))
		    {!! session('message.level') !!}
	@endif
	@if (session()->has('message.level1'))
		    {!! session('message.level1') !!}
	@endif
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
				<tr id = "tr-{{ $blog->id }}">
					<td>{{$blog->id }}</td>
					<td>{{$blog->title }}</td>
					<td>
						<img style="width: 150px; height: 150px;" src="{{ $blog->image }}" alt="">
					</td>
					<td>{!! str_limit($blog->description, $words = 55, $end = '...') !!}</td>
					<td>{!! str_limit($blog->content, $words = 55, $end = '...') !!}</td>
					<td>
						<a href="{{ route('blog.show', $blog->id) }}">
							<button type="button" class="btn btn-default btn-success">Xem</button>
						</a>
						<a href="{{ route('blog.edit', $blog->id) }}">
							<button type="button" class="btn btn-default btn-warning">Sửa</button>
						</a>
						<button data-id = "{{ $blog->id }}" type="submit" class="btn btn-default btn-danger" >Xóa</button>
					</td>
				</tr>
			@endforeach @endif
		</tbody>
	</table>
	{{$blogs->links()}}
</html>
</div>
<script>
	$(function(){
		$('.btn-danger').click(function(){
			// alert('aaa');
			var id = $(this).data('id');
			swal({
				title: "Bạn có muốn xóa không?",
					type: "warning",
					showCancelButton: true,
					confirmButtonColor: "#DD6B55",
					confirmButtonText: "Có",
					cancelButtonText: "Không",
					// closeOnConfirm: false
			},
			function(){
					$.ajax({
						// alert('a');
						type:'delete',
						url: 'blog/' +id,
						success: function(data){
							// swal("Delete!", "Bạn đã xóa thành công");

							toastr.success('Bạn đã xóa thành công.');
							$('#tr-'+id).remove();
							// setTimeout(function(){
							// 	window.location.reload();
							// },1000);
						}
					});
				});
		});
	})
</script>
@stop