@extends('layouts.Dashboard')
@section('section')
	<form action="{{ route('blog.store') }}" method="POST" role="form" enctype="multipart/form-data" id="form">
		<legend>Form title</legend>
		{{ csrf_field() }}
		<div class="form-group">
			<label for="">Title</label>
			<input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ old('title') }}">
		</div>
		<div class="form-group">
			<label for="">Image</label>
			<input type="file" id="image" name="image" class="form-control" id="image">
		
		</div>
		<div class="form-group">
			<label for="">Description</label>
			<textarea class="form-control" name="description" id="description" cols="30" rows="4">{{ old('description') }}</textarea>
		</div>
		<div class="form-group">
			<label for="">Content</label>
			<textarea class="form-control" name="content" id="content" cols="30" rows="4">{{ old('content') }}</textarea>
		</div>
		<div class="form-group">
			<label for="">User_ID</label>
			<select name="user_id" id="user_id">
				@foreach ($users as $user)
					<option value="{{ $user->id }}">
						{{ $user->name }}
					</option>
				@endforeach
			</select>

		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@stop