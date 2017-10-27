<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>The News Reporter</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="{{ asset('font/font-awesome.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('font/font.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.bxslider.css') }}" media="screen" />
</head>
<body>
<div class="body_wrapper">
  <div class="center">
    <div class="header_area">
      <div class="logo floatleft"><a href="#">{{-- <img src="images/logo.png" alt="" /> --}}<a href="http://project.laravel/blogs"><h1><span>TRANG</span> TIN TỨC</h1></a></a></div>
      <div class="top_menu floatleft">
        <ul>
          <li><a href="http://project.laravel/blogs">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">Subscribe</a></li>
          <li><a href="login">Login</a></li>
        </ul>
      </div>
      <div class="social_plus_search floatright">
        <div class="social">
          <ul>
            <li><a href="#" class="twitter"></a></li>
            <li><a href="#" class="facebook"></a></li>
            <li><a href="#" class="feed"></a></li>
          </ul>
        </div>
        <div class="search">
          <form action="#" method="post" id="search_form">
            <input type="text" value="Search news" id="s" />
            <input type="submit" id="searchform" value="search" />
            <input type="hidden" value="post" name="post_type" />
          </form>
        </div>
      </div>
    </div>
    <div class="main_menu_area">
      <ul id="nav">
        <li><a href="http://project.laravel/blogs">Home</a>
         {{--  <ul>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a>
              <ul>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
              </ul>
            </li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
          </ul> --}}
        </li>
        <li><a href="#">Thế Giới</a></li>
        {{-- <li><a href="#">tech</a>
          <ul>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
          </ul>
        </li> --}}
        <li><a href="#">Xã Hội</a></li>
        <li><a href="#">Thể Thao</a>
         {{--  <ul>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a>
              <ul>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
              </ul>
            </li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
          </ul> --}}
        </li>
        <li><a href="#">Giáo Dục</a></li>
        <li><a href="#">Kinh doanh</a></li>
        <li><a href="#">Giải trí</a>
          {{-- <ul>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
          </ul> --}}
        </li>
        <li><a href="#">Du lịch</a></li>
        <li><a href="#">Pháp Luật</a></li>
        <li><a href="#">Nhịp sống trẻ</a></li>
      </ul>
    </div>
    <div class="content_area">
      <div class="main_content floatleft">
    