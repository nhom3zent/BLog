@include('layouts.Plane')
@include('layouts.Dashboard')
<div>
	<h2>DANH SACH...............</h2>

	
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
				<tr>
					<td>{{$category->id }}</td>
					<td>{{$category->name }}</td>
					<td>{{$category->description }}</td>

					<td><a href="{{route('categories.show',$category->id)}}"><button type="button" 
					class="btn btn-default btn-info">Xem</button></a>

					<a href="{{route('categories.edit',$category->id)}}"><button type="button" class="btn btn-default btn-warning">Sửa</button></a>
					
					<form method="POST" style="display: inline-block;" action="{{route('categories.destroy',$category->id)}}">
								{{csrf_field()}}

								<input type="hidden" name="_method" value="DELETE">
								<button type="submit" >xoa</button>
					</form>
					</td>
				</tr>
			@endforeach @endif
		</tbody>
	</table>
	{{$categories->links()}}
</html>
</div>