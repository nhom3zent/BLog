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
	<a href="{{ route('tags.create') }}"><button type="button" class="btn btn-default btn-info" >Them moi</button></a>

	<table class="table table-hover">

		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Blog_ID</th>
				<th>Action</th>

			</tr>
		</thead>
		<tbody>
			
			@if(!empty($tags))
				@foreach ($tags as $tag)
				<tr id = "tr-{{ $tag->id }}">
					<td>{{$tag->id }}</td>
					<td>{{$tag->name }}</td>
					<td>{{$tag->blog_id}}</td>
					<td><a href="{{ route('tags.show',$tag->id) }}"><button type="button" 
					class="btn btn-default btn-info">Xem</button></a>
					<a href="{{ route('tags.edit',$tag->id) }}"><button type="button" class="btn btn-default btn-warning">Sửa</button></a>

					
					{{-- <form method="POST" style="display: inline-block;" action="{{route('tags.destroy',$tag->id)}}">
								{{csrf_field()}}

								<input type="hidden" name="_method" value="DELETE">
								<button type="submit" class="btn btn-default btn-danger">xoa</button>
					</form> --}}
					<button data-id = "{{ $tag->id }}" type="submit" class="btn btn-default btn-danger" >Xóa</button>
					</td>
				</tr>
			@endforeach @endif
		</tbody>
	</table>
	{{$tags->links()}}
</html>
</div>
<script>
			$(function() {
				$('.btn-danger').click(function(event){
					event.preventDefault();
					var id = $(this).data('id');
					swal({
					  title: "Are you sure?",
					  text: "You will not be able to recover this imaginary file!",
					  type: "warning",
					  showCancelButton: true,
					  confirmButtonColor: "#DD6B55",
					  confirmButtonText: "Yes, delete it!",
					  cancelButtonText: "No, cancel plx!",
					  // closeOnConfirm: true,
					  // closeOnCancel: true
						},
						function(){
							$.ajaxSetup({
							    headers: {
							        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							    }
							});
							$.ajax({
								type: 'delete',
								url: 'tags/'+id,
								success: function(data) {
									// swal("Delete!", "Bạn đã xóa thành công" ,"success");
									toastr.success('Bạn đã xóa thành công');
									$('#tr-'+id).remove();
									
								}
							
							});
					});
				});
			});
				
		</script>	
@stop