@include('layouts.Plane')
@include('layouts.Dashboard')
<div>
<<<<<<< HEAD
	<h3>Danh Sách Người Dùng</h3>


	<a href=""><button type="button" class="btn btn-default btn-info" >Thêm Mới</button></a>
=======
	<h2>DANH SACH...............</h2>

	
	<a href=""><button type="button" class="btn btn-default btn-info" >Them moi</button></a>
>>>>>>> 5cb4db9ea7c6f4b75fea4cbbdc36a0cb0f1acd81

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
					<td>{{$user->id}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>

					<td><a href=""><button type="button" 
					class="btn btn-default btn-info">Xem</button></a>
					<a href=""><button type="button" class="btn btn-default btn-warning">Sửa</button></a>
<<<<<<< HEAD
					<form method="POST" style="display: inline-block;" action="{{route('blogs.destroy',$user->id) }}">
=======
					<form method="POST" style="display: inline-block;" action="">
>>>>>>> 5cb4db9ea7c6f4b75fea4cbbdc36a0cb0f1acd81
								{{csrf_field()}}

								<input type="hidden" name="_method" value="DELETE">
								<button type="submit" class="btn btn-default btn-danger" >Xóa</button>
					</form>
					</td>
				</tr>
			@endforeach @endif
		</tbody>
	</table>
<<<<<<< HEAD
			{{ $users->links() }}
</body>
=======
	{{$users->links()}}
>>>>>>> 5cb4db9ea7c6f4b75fea4cbbdc36a0cb0f1acd81
</html>
</div>