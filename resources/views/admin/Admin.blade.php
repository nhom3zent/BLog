@include('layouts.Plane')
@include('layouts.Dashboard')
<div>
	<h2>DANH SACH...............</h2>

	
	<a href=""><button type="button" class="btn btn-default btn-info" >Them moi</button></a>

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
					<td>{{$user->id }}</td>
					<td>{{$user->name }}</td>
					<td>{{$user->email }}</td>

					<td><a href=""><button type="button" 
					class="btn btn-default btn-info">Xem</button></a>
					<a href=""><button type="button" class="btn btn-default btn-warning">Sửa</button></a>
					<form method="POST" style="display: inline-block;" action="">
								{{csrf_field()}}

								<input type="hidden" name="_method" value="DELETE">
								<button type="submit" >xoa</button>
					</form>
					</td>
				</tr>
			@endforeach @endif
		</tbody>
	</table>
	{{$users->links()}}
</html>
</div>