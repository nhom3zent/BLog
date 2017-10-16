@include('layouts.Plane')
@include('layouts.Dashboard')
<ul>

	<div><h4>{{$categories->name}}</h4></div>
	<p>{{$categories->description}}</p>
  <p>{{$categories->created_at}}</p>
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
