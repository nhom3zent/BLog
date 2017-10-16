@include('layouts.Plane')
@include('layouts.Dashboard')
<div>
	<h2>DANH SACH av.</h2>

	
	<a href="{{ route('users.create') }}"><button type="button" class="btn btn-default btn-info" >Them moi</button></a>

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

					<td><a href="{{ route('users.show',$user->id) }}"><button type="button" 
					class="btn btn-default btn-info">Xem</button></a>
					<a href="{{ route('users.edit',$user->id) }}"><button type="button" class="btn btn-default btn-warning">Sửa</button></a>
					<form method="POST" style="display: inline-block;" action="{{route('users.destroy',$user->id)}}">
								{{csrf_field()}}

								<input type="hidden" name="_method" value="DELETE">
								<button type="submit" class="btn btn-default btn-danger">xoa</button>
					</form>
					</td>
				</tr>
			@endforeach @endif
		</tbody>
	</table>
	{{$users->links()}}
</html>
</div>