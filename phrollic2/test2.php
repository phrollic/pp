<?php 
include_once("base.php");

?>

<html xmlns="http://www.w3.org/1999/xhtml">    
<head>    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
<title>Phrollic</title>  
	<link href="style.css" rel = "stylesheet" />
	<link href="dist/css/bootstrap.css" rel="stylesheet">
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate-custom.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="login.css" rel="stylesheet">
    <link href="css/demos.css" rel="stylesheet" />
	<script src="js/index-js.html" type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


    <style>
    .navbar.transparent{
    border-width: 0px;
    -webkit-box-shadow: 0px 0px;
    background-color: rgba(0,0,0,0.5);
    background-image: -webkit-gradient(linear, 50.00% 0.00%, 50.00% 100.00%, color-stop( 0% , rgba(0,0,0,0.00)),color-stop( 100% , rgba(0,0,0,0.00)));
    background-image: -webkit-linear-gradient(270deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
    background-image: linear-gradient(180deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
}
	.container{
		height:10px;
	}
	.jumbotron{
	color:white;
	background-color:rgba(0,0,0,0.0);
	margin-left: -15px;
	margin-top:200px;
	font-weight:bold;
	}
	
	.texts{
		text-align:center;
		color: #ababab;
		margin-top: 20px;
	}
	.h1{
	height:100px;
	margin-left:20px;
	}
	
    </style>
    <style>
			ol {
				list-style: none;
				padding: 0;
				margin: 0 auto;
				width: 75em;
				height: 24em;
			}
			li {
				height: 35em;
				width: 30em;
				background-color: #fff;
				text-align: center;
				cursor: pointer;
				overflow:scroll;
				-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
			}
				li.roundabout-in-focus {
					cursor: default;
				}
			li span {
				display: block;
				padding-top: 6em;
			}

			#carbonads-container .carbonad {
				margin: 0 auto;
			}
		</style>
</head>    
<body ">  
<div class = "wrapper">

   <div class="navbar transparent navbar-fixed-bottom">
      <div class="container">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </a>
	    <div class = "texts">
	  <small><a href = "about.php" style = "text-decoration: none;">About </a></small>
      <small><a href = "developers.php"  style = "text-decoration: none; padding-left:10px;">Developers </a></small>
      <small><a href= "documentation.php"  style = "text-decoration: none; padding-left:10px;">Documentation </a></small>
      <small>&copy 2013 Phrollic</small>
      </div>
         	</div>
        </div>
      </div>
    </div>

  </div>




 	
 	
 	
 	<br/>
 	<br/>
		<ol>
			<li><a href="#"><h1>Businesses &raquo;</h1></a><hr/><h2>Trending Now</h2><hr/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></li>
			<li><h1>Hotels</h1><hr/><h2>Trending Now</h2><hr/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></li>
			<li><h1>Movies</h1><hr/><h2>Trending Now</h2><hr/></li>
			<li><h1>Music</h1><hr/><h2>Trending Now</h2><hr/></li>
			<li><h1>Restaurants</h1><hr/><h2>Trending Now</h2><hr/></li>
			


		</ol>
  
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script>
    	$('#Twitusername').tooltip({'trigger':'hover','title':'Your Twitter Username'});
    	$('#Twitpassword').tooltip({'trigger':'hover','title':'Your Twitter Password'});
    	
    </script>
    	<script src="jquery.js"></script>
    <script src="jquery.backstretch.js"></script>
    <script>
        $.backstretch([
          "skyline.jpg",
          "abu.jpg",
        "beach.jpg",

        ], {
            fade: 750,
            duration: 4000
        });
    </script>

		<script src="js/jquery.js"></script>
		<script src="js/jquery.roundabout2.js"></script>
		<script>
			$(document).ready(function() {
				$('ol').roundabout();
			});
		</script>
</body>  
</html>

