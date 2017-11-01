@extends('blog.BlogSideBarRight')

@section('ContentLeft')
	<article style="color: black;">
    	<div class="post-image">
        	<img src="{!! asset($blog->image) !!}" alt="post image 1"> 
        </div>
        <div class="category">
        	<a href="#">IMG</a>
        </div>
        <div class="post-text">
        	<span class="date" style="text-align: center;">{!! $blog->created_at !!}</span>
            <h2 style="color: black;">{!! $blog->title !!}</h2>
        </div>                 
        <div class="post-text text-content">
        	<div class="post-by">Post By <a href="#">AD-Theme</a></div>  
        	<br>                  
            <div class="text" style="color: black;">
                <b style="font-size: 18px;">{!! $blog->description !!}</b>
            </div>
        	<div class="text" style="color: black;">
        		<p>{!! $blog->content !!}</p>
            </div>
        </div>
        <div class="social-post">
            <a href="#"><i class="icon-facebook5"></i></a>
            <a href="#"><i class="icon-twitter4"></i></a>
            <a href="#"><i class="icon-google-plus"></i></a>
            <a href="#"><i class="icon-vimeo4"></i></a>
            <a href="#"><i class="icon-linkedin2"></i></a>                  
        </div>
        
    	<p>
	        <div class="fb-comments" {{-- data-href="http://blog.dev/blogs/{{$blog->slug}}" --}} data-colorscheme="light" 
	         data-numposts="5" data-width="500" data-href="{{ route('blogs.detail',['slug'=>$blog->slug]) }}"></div>
	        <div id="fb-root"></div>
	      	<script>(function(d, s, id) {
	      	  var js, fjs = d.getElementsByTagName(s)[0];
	      	  if (d.getElementById(id)) return;
	      	  js = d.createElement(s); js.id = id;
	      	  js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1&appId=YOUR_APP_ID";
	      	  fjs.parentNode.insertBefore(js, fjs)
	      	}(document, 'script', 'facebook-jssdk'))</script>


	        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TssHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	    </p>
		  
    
	 </article>
@stop