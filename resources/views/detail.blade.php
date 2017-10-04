@include('header')
<!DOCTYPE html>
<html>
<html ... xmlns:fb="http://ogp.me/ns/fb#">
<head>
  <meta charset="utf-8">
  <meta property="fb:app_id" content="{YOUR_APP_ID}" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css"> </head>

<body>

{{-- <ul>
	<li>User_Id: <p><select name="user_id" id="">
				@foreach ($profiles as $profile)
					<option value="{{$profile->id}}"
						@if($profile->id == $blog->user_id)
						selected
						@endif>{{$profile->name}}</option>
				@endforeach
			</select></p></li>

	<li>Title: {{$blogs->title}}</li>
	<li>Content: {{$blogs->content}}</li>
	<li>Image: <p><img class="img-responsive" src="{{asset($blogs->image) }} " width="200px" height="100px" alt=""></li>
	<li>Description: {{$blogs->description}}</li>

	
</ul> --}}


  <h1>CHI TIẾT BLOG</h1>

  <h4 align="center">Thông tin người dùng</h4>
  <ul>
    <li>ID: 1 </li>
    <li>User_ID: 1 </li>
    <li>TITLE: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
    <li>Image: <p><img src="http://media2.thethaovanhoa.vn/2017/02/25/14/58/tu-linh-15.jpg"></p></li>
    <li>Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
    <li>Content: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
    <li>Status: 1</li>
    <li>Created_at:</li>
    <li>Updated_at:</li>
    </li>

  </ul>

  <p>
      <div class="fb-comments" data-href="http://tin.vn" data-colorscheme="light" 
       data-numposts="5" data-width="500"></div>
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
</body>

</html>


@include('sidebar')
@include('footer')