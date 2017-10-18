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
		<div class="form-group">
			<label for="">Image</label>
			<input type="file" id="image" name="image" class="form-control" id="image" value="asset('path/to/asset')">
			<img style="width: 200px; height: 200px;" src="/{{ $blog->image }}" alt="">

			<img src="{{ $blog->image }}" style="height: 200px; width: 200px;" alt="">
		</div>
		<div class="form-group">
			<label for="">Description</label>
			<textarea class="form-control" name="description" id="description" cols="30" rows="4">{{ $blog->description }}</textarea>
		</div>
		<div class="form-group">
			<label for="">Content</label>
			<textarea class="form-control" name="content" id="content" cols="30" rows="4">{{ $blog->content }}</textarea>
		</div>
		<div class="form-group">
			<label for="">User_ID</label>
			<select name="user_id" id="user_id">
				@foreach ($users as $user)
					<option value="{{ $user->id }}" 
						@if($blog->user_id == $user->id) selected @endif
					>
						{{ $user->name }}
					</option>
				@endforeach
			</select>

		</div>
		<input type="hidden" name="_method" value="PUT">
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@stop