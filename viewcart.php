<?php

session_start();

if(isset($_GET['logout'])) 
{
unset($_SESSION['Email']);
unset($_SESSION['name']);
unset($_SESSION['cart']);
}

include 'Connection.php';

if(isset($_GET['id']))
{
	
$oid = $_GET['id'];
$emid = $_GET['em'];	


}


$r = mysql_query("select * from cart where Order_id = '$oid' and email = '$emid'") or die("Error in selecting data from database");

?>






<!DOCTYPE html>
<html>
<head>
<title>View | BookLand</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->

<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- timer -->
<link rel="stylesheet" href="css/jquery.countdown.css" />
<!-- //timer -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
</style>
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			
			
			<?php include 'InputHeader.php'; ?>
			
			<div class="logo-nav">
				<div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
					<h1><a href="index.php">BookLand <span>Educating us.</span></a></h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default" >
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php" class="act">Home</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">NOVELS <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>SCI-FI</h6>
												<li><a href="the-time-machine.php">The Time Machine</a></li>
												<li><a href="the-hyperion.php">Hyperion</a></li>
												<li><a href="the-forever-war.php">The Forever War</a></li>
												<li><a href="the-martian.php">The Martian</a></li>
												<li><a href="enders-game.php">Ender's Game</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>ROMANCE</h6>
												<li><a href="pride-prejudice.php">Pride & Prejudice</a></li>
												<li><a href="fifty.php">Fifty Shades of Grey</a></li>
												<li><a href="notebook.php">The Notebook</a></li>
												<li><a href="walk.php">A Walk to Remember</a></li>
												<li><a href="fault-in.php">The Fault in our Stars</a></li>
												<li><a href="love-story">Love Story</a></li>
												<li><a href="raven.php">The Raven Prince</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>BIOGRAPHIES	</h6>
												<li><a href="wings.php">Wings of Fire: An Autobiography 1st Edition</a></li>
												<li><a href="motorcycle-diaries.php">THE MOTORCYCLE DIARIES</a></li>
												<li><a href="steve-jobs.php">Steve Jobs by Walter Isaacson</a></li>
												<li><a href="infinity.php">TRAVELLING TO INFINITY</a></li>
												<li><a href="other-side.php">THE OTHER SIDE OF ME</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">OTHERS <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>EXAMS</h6>
												<li><a href="mca.php">A Complete Study Pacakage for MCA Entrances</a></li>
												<li><a href="bank.php">Bank PO Reasoning : 17 Years (2000 - 2016)</a></li>
												<li><a href="mat.php">Face To Face MAT With 21 Years(1997-2017)</a></li>
												<li><a href="engg.php">Higher Engineering Mathematics 43rd Edition</a></li>
												<li><a href="gre.php">The Official Guide to the GRE</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>COMICS</h6>
												<li><a href="wimpy-kid.php">The Wimpy Kid Do -It- Yourself Book</a></li>
												<li><a href="avengers.php">The Avengers - The S.H.I.E.L.D. Files</a></li>
												<li><a href="as-you-wish.php">As You Wish</a></li>
												<li><a href="tintin.php">The Adventures of Tintin</a></li>
												<li><a href="mickey.php">Mickey's Roundup</a></li>
												<li><a href="superman.php">Rise Of The Superman</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>BUSINESS</h6>
												<li><a href="investor.php">THE INTELLIGENT INVESTOR</a></li>
												<li><a href="i-do.php">I Do What I Do</a></li>
												<li><a href="wall.php">One Up on Wall Street</a></li>
												<li><a href="habbit-winning.php">Habit of Winning</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li><a href="short-codes.html">about us</a></li>
							<li><a href="mail.php">Mail Us</a></li>
						</ul>
					</div>
					</nav>
				</div>
				<div class="logo-nav-right">
					<div class="search-box">
						<div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
					</div>
						<!-- search-scripts -->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
						<!-- //search-scripts -->
				</div>
				<div class="header-right">
					<div class="cart box_1">
						<a href="cart.php">
							<h3> 
								<img src="images/bag.jpg" alt="" width="70" height="70" />
							</h3>
						</a>
						
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">My Orders</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

<div class="checkout">
		<div class="container">
			<h3 class="animated wow slideInLeft" data-wow-delay=".5s">Order Details :<span></span></h3>
			<div class="checkout-right animated wow slideInUp" data-wow-delay=".5s">
				
			<table>
				<tr>
					<th></th>
					<th>Book Name</th>
					<th>Quantity</th>
					<th>Total Price</th>
				</tr>
				<?php 
				
				while($rows = mysql_fetch_row($r))
				{  ?>
					
				<tr>
					<td><img src="<?php echo ($rows[3]);?>" height="120" width="100"/></td>
					<td><?php echo $rows[2]; ?></td>
					<td><?php echo $rows[5]; ?></td>
					<td>&#8377 <?php echo $rows[6]; ?></td>
					
				</tr>
				<?php } ?>
			</table>
			</div>
		</div>
	</div>
</div>


<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>About Us</h3>
					<p>BOOKLAND Book Store, founded in 1925, is now in its third generation of family ownership.<span>Our enormous stock of antiquarian and out-of-print items fills a six-floor building in midtown Manhattan and a large warehouse in Brooklyn.</span></p>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".7s">
					<h3>Flickr Posts</h3>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.php"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".8s">
					<h3>Blog Posts</h3>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="single.php"><img src="images/9.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="single.php">Nice Product!!!</a></h4>
							<p>Posted On 25/3/2017</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="single.php"><img src="images/10.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="single.php">Worth Price</a></h4>
							<p>Posted On 25/3/2017</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
				<h2><a href="index.php">BookLand <span>Educate Us</span></a></h2>
			</div>
			<div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
				<p>&copy 2017 BookLand. All rights reserved</p>
			</div>
		</div>
	</div>
<!-- //footer -->

</body>
</html>