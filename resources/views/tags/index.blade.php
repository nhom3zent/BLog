@include('layouts.Plane')
@include('layouts.Dashboard')
<div>
	<h2>DANH SACH av.</h2>

	
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
				<tr>
					<td>{{$tag->id }}</td>
					<td>{{$tag->name }}</td>
					<td>{{$tag->blog_id}}</td>
					<td><a href="{{ route('tags.show',$tag->id) }}"><button type="button" 
					class="btn btn-default btn-info">Xem</button></a>
					<a href="{{ route('tags.edit',$tag->id) }}"><button type="button" class="btn btn-default btn-warning">Sửa</button></a>

					
					<form method="POST" style="display: inline-block;" action="{{route('tags.destroy',$tag->id)}}">
								{{csrf_field()}}

								<input type="hidden" name="_method" value="DELETE">
								<button type="submit" class="btn btn-default btn-danger">xoa</button>
					</form>
					</td>
				</tr>
			@endforeach @endif
		</tbody>
	</table>
	{{$tags->links()}}
</html>
</div>