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

<ul>

	<div><h4>{{$blogs->title}}</h4></div>

	<p>{{$blogs->description}}</p>
	<p><img class="img-responsive" src="{{asset($blogs->image) }} " width="200px" height="100px" alt=""></p>
  <p>{{$blogs->content}}</p>

  <p>{{$blogs->created_at}}</p>
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