@extends('layouts.Dashboard')
@section('page_heading')
<span>Danh sách bài đăng</span>
@stop
@section('section')
<div>

	
	<a href="{{route('categories.create')}}"><button type="button" class="btn btn-default btn-info" >Them moi</button></a>

	<table class="table table-hover">

		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Description</th>
				<th>Action</th>

			</tr>
		</thead>
		<tbody>
			
			@if(!empty($categories))
				@foreach ($categories as $category)
				<tr id = "tr-{{ $category->id }}">
					<td>{{$category->id }}</td>
					<td>{{$category->name }}</td>
					<td>{{$category->description }}</td>

					<td><a href="{{route('categories.show',$category->id)}}"><button type="button" 
					class="btn btn-default btn-info">Xem</button></a>

					<a href="{{route('categories.edit',$category->id)}}"><button type="button" class="btn btn-default btn-warning">Sửa</button></a>
					
					{{-- <form method="POST" style="display: inline-block;" action="{{route('categories.destroy',$category->id)}}">
								{{csrf_field()}}

								<input type="hidden" name="_method" value="DELETE">
								
					</form> --}}
					<button data-id = "{{ $category->id }}" type="submit" class="btn btn-default btn-danger" >Xóa</button>
					</td>
				</tr>					
			@endforeach @endif
		</tbody>

	</table>
	{{$categories->links()}}
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
								url: 'categories/'+id,
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