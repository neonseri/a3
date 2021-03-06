<!doctype html>

<html>
<head>
     <title>
		@yield('cat', 'Which Cat Are You?')
	</title>
	<meta charset='utf-8'>
	<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
     <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
     <link href='/css/regularcat.css' type='text/css' rel='stylesheet'>

</head>


<body>


     <!--  This is the navigation that will be inherited-->
     <nav class="navbar navbar-default">
          <div class="container-fluid">
               <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                         <span class="sr-only">Toggle navigation</span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">A3 - Which Cat Are You?
                    </a>
               </div>
               <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                         <li class="active"><a href="/determine">Home</a></li>
                              <li><a href="https://www.youtube.com/watch?v=QH2-TGUlwu4">Listen to Nyan Cat</a></li>
                              <li><a href="http://www.people.fas.harvard.edu/~jfeliciano/NyanNyanGame.html">Play Nyan Game (trust me - play this)</a></li>
                    </ul>
               </div><!--/.nav-collapse -->
          </div>
     </nav>


     <!--  The code below is obviously where the child -->
     <div class="container">
          <div class="starter-template">
               <section>
                    @yield('content')
               </section>
          </div>
     </div>








</body>
</html>
