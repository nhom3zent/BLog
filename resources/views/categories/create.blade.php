@include('layouts.Plane')
@include('layouts.Dashboard')
<form action="{{route('categories.store')}}" method="POST" role="form" enctype="multipart/form-data">
		<legend>Thêm mới bài viết</legend>
		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		<div class="form-group">
			<label for="">name</label>
			<input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{old('name')}}">
		</div>
		<div class="form-group">
			<label for="">Description</label>
			<input type="text" class="form-control" id="desciption" name="description" placeholder="Input field" value="{{old('description')}}">
		</div>
		{{csrf_field()}}	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>