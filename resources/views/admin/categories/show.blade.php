@extends('layouts.Dashboard')
@section('page_heading')
<span>Danh sách bài đăng</span>
@stop
@section('section')
  <ul>

  	<div><h4>{{$categories->name}}</h4></div>
  	<p>{{$categories->description}}</p>
    <p>{{$categories->created_at}}</p>
  </ul>
    
@stop
