@extends('layouts.Dashboard')
@section('section')
	<head>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

</head>
	
	<form action="{{ route('blog.store') }}" method="POST" role="form" enctype="multipart/form-data" id="form">
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
			<label for="">Tag</label>		
			<select style="width: 100%;" class="select2" multiple name="tag_id[]">
				@foreach ($tags as $tag)
			  		<option value="{{ $tag->id }}">{{ $tag->name }}</option>
				@endforeach
		  	</select>		
		</div>
		<input type="hidden" class="form-control" name="user_id" id="user_id" placeholder="Title" value="{{ Auth::user()->id }}">
		{{-- <div class="form-group">
			<label for="">User Name</label>
			<input type="text" class="form-control" disabled placeholder="Title" value="{{ Auth::user()->name }}">
			
		</div> --}}
		
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
	
@stop