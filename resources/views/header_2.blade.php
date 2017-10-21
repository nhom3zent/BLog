<!DOCTYPE html>
<html>
<head>
  <title></title>

  <head>
    <title>Welcome to my site</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Oswald Font -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tooltipster.css') }}" />
    <!-- home slider-->
    <link href="{{ asset('css/pgwslider.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="assets/stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" media="screen"> 
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" media="screen">    
  </head>

  <body>

  <section id="header_area">
      <div class="wrapper header">
        <div class="clearfix header_top row">
          <div class="clearfix logo floatleft">
            <a href=""><h1><span>ZENT</span>  GROUP</h1></a>
          </div>
          <div class="clearfix search floatright">
            <form>
              <input type="text" placeholder="Search"/>
              <input type="submit"/>
            </form>
          </div>
        </div>
        <div class="header_bottom">
          <nav>
            <ul id="nav">
              <li><a href="http://project.laravel/blogs">Home</a></li>
              <li><a href="">Category</a></li>
              <li id="dropdown"><a href="">Drop Down</a>
                <ul>
                  <li><a href="">Home</a></li>
                  <li><a href="">Category</a></li>
                  <li><a href="">Category</a></li>
                  <li><a href="">Category</a></li>
                  <li><a href="">Category</a></li>
                  <li><a href="">Category</a></li>
                  <li><a href="">Category</a></li>
                  <li><a href="">Category</a></li>
                  <li><a href="">Category</a></li>
                  <li><a href="">About us</a></li>
                  <li><a href="">Contact us</a></li>
                </ul>
              </li>
              {{-- <li><a href="">Category</a></li>
              <li><a href="">Category</a></li>
              <li><a href="">Category</a></li>
              <li><a href="">Category</a></li>
              <li><a href="">Category</a></li>
              <li><a href="">Category</a></li>
              <li><a href="">Category</a></li>
              <li><a href="">Category</a></li>
              <li><a href="">About us</a></li>
              <li><a href="">LOGIN</a></li> --}}
            </ul>
          </nav>
        </div>
      </div>
  </section>
  <section id="content_area">
        <div class="clearfix wrapper main_content_area">
        <div class="clearfix main_content floatleft">