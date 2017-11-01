@extends('layouts.Dashboard')
@section('section')
	<form action="{{route('tags.update',$tag->id)}}" method="POST" role="form">
		<legend>Form title</legend>
		{{csrf_field()}}

		<div>
			<input type="hidden" name="_method" value="PUT">

		</div>

		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control" id="name" placeholder="Input field" name="name" value="{{$tag->name}}">
		</div>
		@if ($errors->has('name'))
			<p style="color: red;">{{ $errors->first('name') }}</p>
		@endif
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@stop