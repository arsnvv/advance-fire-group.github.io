<!DOCTYPE HTML>
<html>
<!DOCTYPE html>
<html>
    <head>
		<meta charset = "utf-8">
        <title>Site0.1</title> 
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
		<header>
			<div class="header__logo"><p>Site0.1</p></div>
			<nav>
				<div class="topnav" id="myTopnav">
					<a href="#home">Home</a>
					<a href="#news">News</a>
					<a href="#video">Video</a>
					<a href="#">User</a>
					<a href="#" id="menu" class="icon">&#9776;</a>
				</div>
			</nav>
		</header>
		
		<main>
			<div class="main__welcome">
				<h1>WELCOM ON <span class="mycompany">Site0.1</span></h1>
				<p>:)</p>
			</div>
			<div id="home" class="container-fluid">
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#results" ).load( "fetch_pages.php"); //load initial records
	
	//executes code below when user click on pagination links
	$("#results").on( "click", ".pagination a", function (e){
		e.preventDefault();
		$(".loading-div").show(); //show loading element
		var page = $(this).attr("data-page"); //get page number from link
		$("#results").load("fetch_pages.php",{"page":page}, function(){ //get content from PHP page
			$(".loading-div").hide(); //once done, hide loading element
		});
		
	});
});




</script>

</head>
<body>

<div class="loading-div"><img src="ajax-loader.gif" ></div>
<div id="results"><!-- content will be loaded here --></div>  <h1>Section 1</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="news" class="container-fluid">
  <h1>Section 2</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="video" class="container-fluid">
  <h1>Section 3</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>	
		</main>
		<footer>

		</footer>
		
		<script src="js/script.js"></script>
    </body>
</html>





