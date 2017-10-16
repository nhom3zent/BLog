<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<form action="{{route('blogs.update',$blog->id)}}" method="POST" role="form">
		<legend>Form title</legend>
		{{csrf_field()}}

		<div>
			<input type="hidden" name="_method" value="PUT">

		</div>

		<div class="form-group">
			<label for="">User_id</label>
			<p><select name="user_id" id="">
				@foreach ($profiles as $profile)
					<option value="{{$profile->id}}"
						@if($profile->id == $blog->user_id)
						selected
						@endif>{{$profile->name}}</option>
				@endforeach
			</select></p>
		</div>

		<div class="form-group">
			<label for="">Title</label>
			<input type="text" class="form-control" id="" placeholder="Input field" name="title" value="{{$blog->title}}">
		</div>
	
		<div class="form-group">
			<label for="">Content</label>
			<input type="text" class="form-control" id="" placeholder="Input field" name="Content" value="{{$blog->content}}">
		</div>

		<div class="form-group">
			<label for="">Description</label>
			{{-- <textarea name="description" value="{{$blog->description}}"></textarea> --}}
			<input type="text" class="form-control" id="" placeholder="Input field" name="description" value="{{$blog->description}}">
		</div>
{{-- 
		<div class="form-group">
			<label for="">Created_at</label>
			<input type="date" class="form-control" id="" placeholder="Input field" name="created_at" value="{{$blog->created_at}}">
		</div>
		
		<div class="form-group">
			<label for="">Updated_at</label>
			<input type="date" class="form-control" id="" placeholder="Input field" name="updated_at" value="{{$blog->updated_at}}">
		</div> --}}

		
	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</body>
</html>