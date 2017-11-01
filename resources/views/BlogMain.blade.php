
@extends('blog.BlogSideBarRight')

@section('ContentLeft') 
    



	@foreach ($blogs as $blog)
		<article style="color: black;">
        	<div class="post-image">
            	<img src="{!! asset($blog->image) !!}" alt="post image 1">
                <div class="category"><a href="#">IMG</a></div>
            </div>
            <div class="post-text">
            	<span class="date">{!! $blog->created_at !!}</span><br>
                <h2><a href="{{ route('blogs.detail', $blog->slug) }}">{{ $blog->title }}</a></h2><br>
                <p class="text">{!! $blog->description !!}
                <a href=""><i class="icon-arrow-right2"></i></a></p>                                 
            </div>
            <div class="post-info">
            	<div class="post-by">Post By <a href="#">AD-Theme</a></div>
                <div class="extra-info">
                	
            		<a href=""><i class="icon-facebook5" aria-hidden="true"></i></a>
            		<a href=""><i class="icon-twitter4"></i></a>
            		<a href=""><i class="icon-google-plus"></i></a>
                    <span class="comments">25 <i class="icon-bubble2"></i></span>
                </div>
                <div class="clearfix"></div>
            </div>
        </article>
	@endforeach	
	{{-- {{ $blogs->links() }} --}}
        	<div class="navigation">
                <a href="#" class="prev"><i class="icon-arrow-left8"></i> Previous Posts</a>
                <a href="#" class="next">Next Posts <i class="icon-arrow-right8"></i></a>
                <div class="clearfix"></div>
            </div>

@stop
