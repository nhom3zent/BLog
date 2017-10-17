@extends('layouts.Dashboard')
@section('page_heading')
	<span>Nội dung bài đăng số {{ $blog->id }}</span>
@stop
@section('section')
	<li>Title: {{ $blog->title }}</li>
	<li>Description: {{ $blog->description }}</li>
	<li>Content: {{ $blog->content }}</li>
	<li>User_Name: 
		@foreach ($users as $user)
			@if ($user->id == $blog->user_id)
				{{ $user->name }}
			@endif

		@endforeach
	</li>
@stop