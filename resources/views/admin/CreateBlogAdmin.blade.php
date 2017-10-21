@extends('layouts.Dashboard')
@section('section')
	<head>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

</head>
	
	<form action="" method="POST" role="form" enctype="multipart/form-data" id="form">
		<legend>Form title</legend>
		{{ csrf_field() }}
		<div class="form-group">
			<label for="">Title</label>
			<input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ old('title') }}">
		</div>
		@if ($errors->has('title'))
			<p style="color: blue;">{{ $errors->first('title') }}</p>
		@endif
		<div class="form-group">
			<label for="">Image</label>
			<input type="file" id="image" name="image" class="form-control" id="image" value="{{ old('image') }}">
		</div>
		@if ($errors->has('image'))
			<p style="color: blue;">{{ $errors->first('image') }}</p>
		@endif
		<div class="form-group">
			<label for="">Description</label>
			<textarea class="form-control" name="description" id="description" cols="30" rows="4">{{ old('description') }}</textarea>
		</div>
		@if ($errors->has('description'))
			<p style="color: blue;">{{ $errors->first('description') }}</p>
		@endif
		<div class="form-group">
			<label for="">Content</label>
			<textarea class="form-control" name="content" id="content" cols="30" rows="4">{{ old('content') }}</textarea>
		</div>
		@if ($errors->has('content'))
			<p style="color: blue;">{{ $errors->first('content') }}</p>
		@endif
		<div>
			<select style="width: 100%;" class="select2" multiple="multiple">
			  <option>Laravel</option>
			  <option>Laravel ACL</option>
			  <option>Laravel PDF</option>
			  <option>Laravel Helper</option>
			  <option>Laravel API</option>
			  <option>Laravel CRUD</option>
			  <option>Laravel Angural JS Crud</option>
			  <option>C++</option>
		  </select>
		</div>
		<div class="form-group">
			<label for="">User Name</label>
			<input type="text" class="form-control" disabled name="user_id" id="user_id" placeholder="Title" value="{{ Auth::user()->name }}">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<script>
		CKEDITOR.replace('description');
		CKEDITOR.replace('content');
	</script>
	<script type="text/javascript">
	     $(document).ready(function() {
	    	$('.select2').select2();
		});
	</script>
	<script>
		$(document).ready(function() {
			$('#form').submit(function(event) {
				event.preventDefault();
				$.ajaxSetup({
				    headers: {
				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    }
				});
				var title = $('#title').val();
				var description = $('#description').val();
				var content = $('#content').val();
				var user_id = $('#user_id').val();
				$.ajax({
					url: '{{ route('blog.store') }}',
					type: 'POST',
					dataType: 'JSON',
					data: {'title': title,'description': description,'content': content, 'user_id': user_id},
				})
				.done(function() {
					console.log("success");
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});
				
			});
		});

	</script>
@stop