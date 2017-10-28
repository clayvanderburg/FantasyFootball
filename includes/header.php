<!DOCTYPE html>
<html>

	<head>

 		<title>Fantasy Football Cheat Sheet</title>
 		<!-- Required meta tags always come first -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
			<link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.hideseek.min.js"></script>
		<link rel="stylesheet" href="style.css">


	</head>
	<body>
	<script type="text/javascript">
    $(window).on('load',function(){
        $('#instructionModal').modal('show');
    });
	</script>
		<header>
			<h1 class="display-5">Fantasy Football Cheat Sheet</h1>

		</br>
		</header>
		<nav class="navbar navbar-dark bg-inverse">
  		<!-- Navbar content -->

  			<ul class="nav navbar-nav">
			    <li class="nav-item">
			      <a class="nav-link active" href="http://www.ffbcheatsheet.info/">Standard<span class="sr-only">(current)</span></a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="http://www.ffbcheatsheet.info/ppr.php">PPR</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="http://www.ffbcheatsheet.info/pprhalf.php">Half PPR</a>
			    </li>

		  	</ul>
		  	<ul class="share-buttons">
			  <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.ffbcheatsheet.info%2F&t=Fantasy%20Cheat%20Sheet" title="Share on Facebook" target="_blank"><img alt="Share on Facebook" src="images/social_flat_rounded_rects_svg/Facebook.svg"></a></li>
			  <li><a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fwww.ffbcheatsheet.info%2F&text=Fantasy%20Cheat%20Sheet:%20http%3A%2F%2Fwww.ffbcheatsheet.info%2F" target="_blank" title="Tweet"><img alt="Tweet" src="images/social_flat_rounded_rects_svg/Twitter.svg"></a></li>
			</ul>
		</nav>



		 <?php
			//link to Position Buttons
			include('includes/buttons.php');
		?>
