@extends('layouts.Dashboard')
@section('page_heading')
<span>Danh sách người dùng</span>
@stop
@section('section')
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<div>
	<h3>Danh Sách Người Dùng</h3>


	<a href=""><button type="button" class="btn btn-default btn-info" >Thêm Mới</button></a>

	<table class="table table-hover" id="example">

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
					<td>{{$user->id}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>

					<td><a href=""><button type="button" 
					class="btn btn-default btn-info">Xem</button></a>
					<a href=""><button type="button" class="btn btn-default btn-warning">Sửa</button></a>
					<form method="POST" style="display: inline-block;" action="{{route('blogs.destroy',$user->id) }}">
								{{csrf_field()}}

								<input type="hidden" name="_method" value="DELETE">
								<button type="submit" class="btn btn-default btn-danger" >Xóa</button>
					</form>
					</td>
				</tr>
			@endforeach @endif
		</tbody>
	</table>
			{{-- {{ $users->links() }} --}}
</body>
</html>
</div>
@stop