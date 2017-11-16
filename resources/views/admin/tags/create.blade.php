@extends('layouts.Dashboard')
@section('section')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<div class="container">
		
		<h1>Them moi</h1>
		<form action="{{route('tags.store')}}" method="POST" role="form" enctype="multipart/form-data">

		<div class="form-group">
			
			<label for="">Name</label>
			<input type="text" name="name" id="name" class="form-control">
		</div>
		@if ($errors->has('name'))
			<p style="color: red;">{{ $errors->first('name') }}</p>
		@endif
		{{-- <div class="form-group">
			
			<label for="">Blog_id</label>
			<input type="text" name="blog_id" id="blog_id" class="form-control">
		</div> --}}
		{{-- @if ($errors->has('blog_id'))
			<p style="color: red;">{{ $errors->first('blog_id') }}</p>
		@endif --}}
		<div class="form-group">
			
			<label for="">Created_at</label>
			<input type="date" name="created_at" id="created_at" class="form-control">
		</div>

		<div class="form-group">
			
			<label for="">Updated_at</label>
			<input type="date" name="updated_at" id="updated_at" class="form-control">
		</div>

			{{csrf_field()}}
		<button type="submit" class="btn btn-default">submit</button>
		</form>
		
	</div>
@stop