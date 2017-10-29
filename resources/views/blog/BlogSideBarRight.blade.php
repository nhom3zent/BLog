<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tada & Blog - About US</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }} "/>
    <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slippry.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }} ">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
        <link href="css/font-awesome.min.css" rel="stylesheet"/>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
<link rel ="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
    <!-- Latest compiled and minified CSS & JS -->
   {{--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Sarina' rel='stylesheet' type='text/css'> --}}
</head>

<body>


    <!-- *****************************************************************
    ** Preloader *********************************************************
    ****************************************************************** -->

	<div id="preloader-container">
    	<div id="preloader-wrap">
    		<div id="preloader"></div>
    	</div>
    </div>
    

    <!-- *****************************************************************
    ** Header ************************************************************ 
    ****************************************************************** --> 
        
    <header class="tada-container">
    <p style=" position: absolute;right: 1%; top: 2%;font-size: 16px;">@if (Auth::user())
        Xin chào <span style="color: blue;" >{{ Auth::user()->name }}</span>
    @endif</p>
    
    	<!-- LOGO -->    
    	<div class="logo-container">
        	<a href="index.html"><img src="{{ asset('img/logo.png') }}" alt="logo" ></a>
            <div class="tada-social">
            	<a href="#"><i class="icon-facebook5"></i></a>
                <a href="#"><i class="icon-twitter4"></i></a>
                <a href="#"><i class="icon-google-plus"></i></a>
                <a href="#"><i class="icon-vimeo4"></i></a>
                <a href="#"><i class="icon-linkedin2"></i></a>
            </div>
        </div>
    	<!-- MENU DESKTOP -->
    	<nav class="menu-desktop menu-sticky">
    
            <ul class="tada-menu">
                    
                    <li><a href="#">KINH TẾ</a></li>
                    <li><a href="#">XÃ HỘI</a></li>                                     
                    <li><a href="#">THỂ THAO</a></li> 
                    <li><a href="about-us.html" class="">VĂN HÓA</a></li>
                    <li><a href="contact.html">THẾ GIỚI</a></li>
                    <li><a href="">LOGIN<i class="icon-arrow-down8"></i></a>
                        <ul class="submenu">                            
                            <li><a href="
                                    @if (Auth::user())
                                        
                                    @else
                                        {{ route('login') }}
                                    @endif

                                ">Đăng nhập</a></li>
                            <li><a href="{{ route('register') }}">Đăng ký</a></li>
                            <li><a href="home-1-column.html">Thêm bài viết</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Đăng xuất
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>               
                        </ul>
                    </li>
            </ul>
        </nav>
 
        
        <!-- MENU MOBILE -->        
        <div class="menu-responsive-container"> 
            <div class="open-menu-responsive">|||</div> 
            <div class="close-menu-responsive">|</div>              
            <div class="menu-responsive">   
                <ul class="tada-menu">
                    
                    <li><a href="#">KINH TẾ</a></li>
                    <li><a href="#">XÃ HỘI</a></li>                                     
                    <li><a href="#">THỂ THAO</a></li> 
                    <li><a href="about-us.html" class="">VĂN HÓA</a></li>
                    <li><a href="contact.html">NGHỆ THUẬT</a></li>
                    <li><a href="contact.html">THẾ GIỚI</a></li>
                    <li><a href="{{ route('login') }}">LOGIN</a>
                         <ul class="submenu">
                            <li><a href="home-1-column.html">Sửa thông tin</a></li>
                            <li><a href="home-1-column.html">Thêm bài viết</a></li>
                            <li><a href="{{ route('logout') }}">Đăng xuất</a></li>               
                        </ul>
                    </li>
                </ul>                       
            </div>
        </div> <!-- # menu responsive container -->
        
        
        <!-- SEARCH -->        
        <div class="tada-search">
			<form>
            	<div class="form-group-search">
              		<input type="search" class="search-field" placeholder="Search and hit enter...">
              		<button type="submit" class="search-btn"><i class="icon-search4"></i></button>
            	</div>
          	</form>
        </div>        
        
        
    </header><!-- #HEADER -->
    

    <section class="tada-container content-posts page post-right-sidebar">
    

        <div class="content col-xs-8">
            @yield('ContentLeft')
        </div>
        
        <div class="sidebar col-xs-4">
            
            
            <!-- ABOUT ME -->                  
            <div class="widget about-me">
                <div class="ab-image">
                    <img src="{{ asset('img/about-me.jpg') }}" alt="about me">
                    <div class="ab-title">About Me</div>
                </div>
                <div class="ad-text">
                    <p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <span class="signing"><img src="img/signing.png" alt="signing"></span>
                </div>
            </div>


            <!-- LATEST POSTS -->                              
            <div class="widget latest-posts">
                <h3 class="widget-title">
                    Latest Posts
                </h3>
                <div class="posts-container">
                
                    <div class="item">
                        <img src="{{ asset('img/latest-posts-1.jpg') }}" alt="post 1" class="post-image">
                        <div class="info-post">
                            <h5><a href="#">MAECENAS <br> CONSECTETUR</a></h5>
                            <span class="date">07 JUNE 2016</span>  
                        </div> 
                        <div class="clearfix"></div>   
                    </div>

                    <div class="item">
                        <img src="{{ asset('img/latest-posts-2.jpg') }}" alt="post 2" class="post-image">
                        <div class="info-post">
                            <h5><a href="#">MAURIS SIT AMET</a></h5>
                            <span class="date">06 JUNE 2016</span>                          
                        </div> 
                        <div class="clearfix"></div>   
                    </div>

                    <div class="item">
                        <img src="{{ asset('img/latest-posts-3.jpg') }}" alt="post 3" class="post-image">
                        <div class="info-post">
                            <h5><a href="#">NAM EGET <br> PULVINAR ANTE</a></h5>
                            <span class="date">05 JUNE 2016</span>                          
                        </div> 
                        <div class="clearfix"></div>   
                    </div>

                    <div class="item">
                        <img src="{{ asset('img/latest-posts-4.jpg') }}" alt="post 4" class="post-image">
                        <div class="info-post">
                            <h5><a href="#">VIVAMUS ET TURPIS LACINIA</a></h5>
                            <span class="date">04 JUNE 2016</span>                      
                        </div>    
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
            </div>


            <!-- FOLLOW US -->                              
            <div class="widget follow-us">
                <h3 class="widget-title">
                    Follow Us
                </h3>
                <div class="follow-container">
                    <a href="#"><i class="icon-twitter4"></i></a>
                    <a href="#"><i class="icon-twitter4"></i></a>
                    <a href="#"><i class="icon-google-plus"></i></a>
                    <a href="#"><i class="icon-vimeo4"></i></a>
                    <a href="#"><i class="icon-linkedin2"></i></a>                
                </div>
                <div class="clearfix"></div>
            </div>            


            <!-- TAGS -->                              
            <div class="widget tags">
                <h3 class="widget-title">
                    Tags
                </h3>
                <div class="tags-container">
                    <a href="#">Audio</a>
                    <a href="#">Travel</a>
                    <a href="#">Food</a>
                    <a href="#">Event</a>
                    <a href="#">Wordpress</a>
                    <a href="#">Video</a>
                    <a href="#">Design</a>
                    <a href="#">Sport</a>
                    <a href="#">Blog</a>
                    <a href="#">Post</a> 
                    <a href="#">Img</a>
                    <a href="#">Masonry</a>                                    
                </div>
                <div class="clearfix"></div>
            </div> 


            <!-- ADVERTISING -->                              
            <div class="widget advertising">
                <div class="advertising-container">
                    <img src="{{ asset('img/350x300.png') }}" alt="banner 350x300">
                </div>
            </div>


            <!-- NEWSLETTER -->                              
            <div class="widget newsletter">
                <h3 class="widget-title">
                    Newsletter
                </h3>
                <div class="newsletter-container">
                    <h4>DO NOT MISS OUR NEWS</h4>
                    <p>Sign up and receive the <br> latest news of our company</p> 
                    <form>
                       <input type="email" class="newsletter-email" placeholder="Your email address...">
                       <button type="submit" class="newsletter-btn">Send</button>
                    </form>                                  
                </div>
                <div class="clearfix"></div>
            </div>  
            
            
        </div> <!-- #SIDEBAR -->
        
        <div class="clearfix"></div>
        
    </section>

    <footer class="tada-container">
    
    
        <!-- INSTAGRAM -->
        <div class="widget widget-gallery">
            <h3 class="widget-title">INSTAGRAM</h3>
            <div class="image">
                <a href="#"><img src="{{ asset('img/img-gallery-1.jpg') }}" alt="image gallery 1"></a>
                <a href="#"><img src="{{ asset('img/img-gallery-2.jpg') }}" alt="image gallery 2"></a>
                <a href="#"><img src="{{ asset('img/img-gallery-3.jpg') }}" alt="image gallery 3"></a>
                <a href="#"><img src="{{ asset('img/img-gallery-4.jpg') }}" alt="image gallery 4"></a>
                <a href="#"><img src="{{ asset('img/img-gallery-5.jpg') }}" alt="image gallery 5"></a>
                <a href="#"><img src="{{ asset('img/img-gallery-6.jpg') }}" alt="image gallery 6"></a>
            </div>
            <div class="clearfix"></div>
        </div>
        
        
        <!-- FOOTER BOTTOM -->
        <div class="footer-bottom">
            <span class="copyright">Theme Created by <a href="#">AD-Theme</a> Copyright © 2016. All Rights Reserved</span>
            <span class="backtotop">TOP <i class="icon-arrow-up7"></i></span>
            <div class="clearfix"></div>
        </div>
        
        
    </footer>
    
    
    <!-- *****************************************************************
    ** Script ************************************************************
    ****************************************************************** -->  
        
    <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/slippry.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
