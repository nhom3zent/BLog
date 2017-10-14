<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		
		<h1>Them moi</h1>
		<form action="{{route('blogs.store')}}" method="POST" role="form" enctype="multipart/form-data">
		<div class="form-group">
			
			<label for="">Title</label>
			<input type="text" name="title" id="title" class="form-control">
		</div>
		<div class="form-group">
			
			<label for="">Image</label>
			<input type="file" name="image" id="image" class="form-control">
		</div>
		<div class="form-group">
			
			<label for="">Description</label>
			<textarea name="description" id="description" class="form-control" cols="30" rows="4" ></textarea>
		</div>
		<div class="form-group">
			
			<label for="">Content</label>
			<input type="text" name="content" id="Content" class="form-control">
		</div>
			{{csrf_field()}}
		<button type="submit" class="btn btn-default">submit</button>
		</form>
		
	</div>
</body>
</html>