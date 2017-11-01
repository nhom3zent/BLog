@extends('layouts.Dashboard')
@section('page_heading')
<span>Đăng ký thành viên</span>
@stop
@section('section')
<form action="{{route('categories.store')}}" method="POST" role="form" enctype="multipart/form-data">
		<legend>Thêm mới bài viết</legend>
		<div class="form-group">
			<label for="">name</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{old('name')}}">
		</div>
		@if ($errors->has('name'))
			<p style="color: red;">{{ $errors->first('name') }}</p>
		@endif
		<div class="form-group">
			<label for="">Description</label>
			<input type="text" class="form-control" id="desciption" name="description" placeholder="Input field" value="{{old('description')}}">
		</div>
		@if ($errors->has('description'))
			<p style="color: red;">{{ $errors->first('description') }}</p>
		@endif
		{{csrf_field()}}	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@stop