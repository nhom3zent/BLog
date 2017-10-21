@extends('layouts.Dashboard')
@section('section')
	<form action="{{ route('blog.update', $blog->id) }}" method="POST" role="form" enctype="multipart/form-data" id="form">
		<legend>Form title</legend>
		{{ csrf_field() }}
		<div class="form-group">
			<input type="hidden" class="form-control" name="id" id="id" placeholder="id" value="{{ $blog->id }}">
		</div>
		<div class="form-group">
			<label for="">Title</label>
			<input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $blog->title }}">
		</div>
		@if ($errors->has('title'))
			<p style="color: blue;">{{ $errors->first('title') }}</p>
		@endif
		<div class="form-group">
			<label for="">Image</label>
			<input type="file" id="image" name="image" class="form-control" id="image" value="asset('path/to/asset')">
			<img style="width: 200px; height: 200px;" src="/{{ $blog->image }}" alt="">
			<img src="{{ $blog->image }}" style="height: 200px; width: 200px;" alt="">
		</div>
		@if ($errors->has('image'))
			<p style="color: blue;">{{ $errors->first('image') }}</p>
		@endif
		<div class="form-group">
			<label for="">Description</label>
			<textarea class="form-control" name="description" id="description" cols="30" rows="4">{{ $blog->description }}</textarea>
		</div>
		@if ($errors->has('description'))
			<p style="color: blue;">{{ $errors->first('description') }}</p>
		@endif
		<div class="form-group">
			<label for="">Content</label>
			<textarea class="form-control" name="content" id="content" cols="30" rows="4">{{ $blog->content }}</textarea>
		</div>
		@if ($errors->has('content'))
			<p style="color: blue;">{{ $errors->first('content') }}</p>
		@endif
		<div class="form-group">
			<label for="">User Name</label>
			<input type="text" class="form-control" disabled="" name="user_id" id="user_id" placeholder="Title" value="{{ Auth::user()->name }}">
		</div>
		<input type="hidden" name="_method" value="PUT">
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<script>
		CKEDITOR.replace('description');
		CKEDITOR.replace('content');
	</script>
@stop