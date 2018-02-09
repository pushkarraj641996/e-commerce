<?php

session_start();

if(isset($_GET['logout'])) 
{
unset($_SESSION['Email']);
unset($_SESSION['name']);
unset($_SESSION['cart']);
}




// $p = $_GET['remark'];

if(isset($_SESSION['name']))
{
	$p = $_SESSION['name'];
}
?>



<!DOCTYPE html>
<html>
<head>
<title>Fifty Shades of Grey | BookLand</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

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
					<nav class="navbar navbar-default">
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
							<li><a href="index.php">Home</a></li>	
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
							<li><a href="short-codes.php">about us</a></li>
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
				<li class="active">Fifty Shades of Grey</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- single -->
	<div class="single">
		<div class="container">
			
			<div class="col-md-8 single-left">
				<div class="col-md-5 single-right-left animated wow slideInUp" data-wow-delay=".5s">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/7a.jpg">
								<div class="thumb-image"> <img src="images/7a.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li data-thumb="images/7b.jpg">
								 <div class="thumb-image"> <img src="images/7b.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li>
						</ul>
					</div>
					<!-- flixslider -->
						<script defer src="js/jquery.flexslider.js"></script>
						<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
					<!-- flixslider -->
				</div>
								
				<div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s">
					<h3>Fifty SHades of Grey</h3>
					<h4><span class="item_price">&#8377 160</span></h4>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked>
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="description">
						<h5><i>Description</i></h5>
						<p>A compelling science fiction, the Time Machine is a first-hand account of a Time Traveler's journey into the future. a pull of the lever and the machine sends him to the year 802,701, when humanity has split into two bizarre races—the ethereal Eloi and the subterranean Morlocks.</p>
					</div>
					<div class="color-quality">
						<div class="color-quality-left">
							<h5>Edition : </h5>
							<ul>
								<li><span></span>Kindle</a></li><br>
								<li><span></span>Paperback</a></li><br>
								<li><span></span>MP3 CD</a></li>
								
							</ul>
						</div>
						<form name="cart" method="get" action="cart.php">
						<div class="color-quality-right">
						<input type="hidden" name="bid" value="7"/>
							<h5>Quantity :</h5>
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect" name="quantity">
								<option value="1">1 Qty</option>
								<option value="2">2 Qty</option> 
								<option value="3">3 Qty</option>					
								<option value="4">4 Qty</option>								
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					<br><br>
					<div class="occasion-cart">
						<button class="button button1" type="submit" name="submit"/>ADD TO CART</button></form>
					</div>
					<div class="social">
						<div class="social-left">
							<p>Share On :</p>
						</div>
						<div class="social-right">
							<ul class="social-icons">
								<li><a href="#" class="facebook"></a></li>
								<li><a href="#" class="twitter"></a></li>
								<li><a href="#" class="g"></a></li>
								<li><a href="#" class="instagram"></a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
				<div class="bootstrap-tab animated wow slideInUp" data-wow-delay=".5s">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
							<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Reviews(2)</a></li>
							<li role="presentation" class="dropdown">
								<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Information <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
									<li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">cleanse</a></li>
									<li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">fanny</a></li>
								</ul>
							</li>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home" aria-labelledby="home-tab">
								<h5>Product Brief Description</h5>
								<p>A compelling science fiction, the Time Machine is a first-hand account of a Time Traveler's journey into the future. a pull of the lever and the machine sends him to the year 802,701, when humanity has split into two bizarre races—the ethereal Eloi and the subterranean Morlocks. Here, his machine is stolen and with the help of Weena, an Eloi he saved from drowning, the traveler is able to retrieve it. 
								Whizzing thirty million years further into the future, he finds a slowly dying earth, where the bloated red sun sits motionless in the sky and the only sign of life is a black blob with tentacles.He returns to the Victorian time, overwhelmed, just three hours after he originally left..
									<span>Credited with inventing the time machine in this masterpiece, the provocative insight of H. G. Wells continues to enthrall the readers. the Time Machine has since been adapted into many feature films and television series and has inspired many more works of fiction. 	</span></p>
							</div>
							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="profile" aria-labelledby="profile-tab">
								<div class="bootstrap-tab-text-grids">
									<div class="bootstrap-tab-text-grid">
										<div class="bootstrap-tab-text-grid-left">
											<img src="images/4.png" alt=" " class="img-responsive" />
										</div>
										<div class="bootstrap-tab-text-grid-right">
											<ul>
												<li><a href="#">Akansh</a></li>
												<li><span class="glyphicon glyphicon-share" aria-hidden="true"></span>Reply</a></li>
											</ul>
											<p>Product was awesome. The delivery was done in time.Great service..!!!</p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="bootstrap-tab-text-grid">
										<div class="bootstrap-tab-text-grid-left">
											<img src="images/5.png" alt=" " class="img-responsive" />
										</div>
										<div class="bootstrap-tab-text-grid-right">
											<ul>
												<li><a href="#">Mukul</a></li>
												<li><span class="glyphicon glyphicon-share" aria-hidden="true"></span>Reply</a></li>
											</ul>
											<p>Purchased the book in passion. Later realized that I dont know how to read English.LOL..!!</p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="add-review">
										<h4>add a review</h4>
										<form>
											<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
											<input type="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" required="">
											<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
											<input type="submit" value="Send" >
										</form>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown1" aria-labelledby="dropdown1-tab">
								<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
							</div>
							<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown2" aria-labelledby="dropdown2-tab">
								<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //single -->
<!-- single-related-products -->
	<div class="single-related-products">
		<div class="container">
			<h3 class="animated wow slideInUp" data-wow-delay=".5s">Related Products</h3>
			<p class="est animated wow slideInUp" data-wow-delay=".5s"></p>
			<div class="new-collections-grids">
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="pride-prejudice.php" class="product-image"><img src="images/6a.jpg" alt=" " class="img-responsive"></a>
							<div class="new-collections-grid1-image-pos">
								<a href="pride-prejudice.php">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="pride-prejudice.php">Pride and Prejudice</a></h4>
						<p>An unknown Love</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>&#8377 199</i> <span class="item_price">&#8377 160</span></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 new-collections-grid">
					<div class="new-collections-grid1-sub">
						<div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".6s">
							<div class="new-collections-grid1-image">
								<a href="walk.php" class="product-image"><img src="images/9a.jpg" alt=" " class="img-responsive"></a>
								<div class="new-collections-grid1-image-pos">
									<a href="walk.php">Quick View</a>
								</div>
								<div class="new-collections-grid1-right">
									<div class="rating">
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<h4><a href="walk.php">A Walk to Remember</a></h4>
							<p> Will he admit his love to her? </p>
							<div class="new-collections-grid1-left simpleCart_shelfItem">
								<p><i>&#8377 350</i> <span class="item_price">&#8377 182</span></p>
							</div>
						</div>
					</div>
					<div class="new-collections-grid1-sub">
						<div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".7s">
							<div class="new-collections-grid1-image">
								<a href="notebook.php" class="product-image"><img src="images/8a.jpg" alt=" " class="img-responsive"></a>
								<div class="new-collections-grid1-image-pos">
									<a href="notebook.php">Quick View</a>
								</div>
								<div class="new-collections-grid1-right">
									<div class="rating">
										<div class="rating-left">
											<img src="images/2.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="images/1.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
							<h4><a href="notebook.php">The Notebook</a></h4>
							<p>The long romantic love of that couple</p>
							<div class="new-collections-grid1-left simpleCart_shelfItem">
								<p><i>&#8377 350</i> <span class="item_price">&#8377 203</span></p>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".8s">
						<div class="new-collections-grid1-image">
							<a href="fault-in.php" class="product-image"><img src="images/10a.jpg" alt=" " class="img-responsive"></a>
							<div class="new-collections-grid1-image-pos">
								<a href="fault-in.php">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive">
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive">
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="fault-in.php">The Fault in our Stars</a></h4>
						<p>This is when they meet each other</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>&#8377 399</i> <span class="item_price">&#8377 190</span></p>
						</div>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
			
		</div>
	</div>
<!-- //single-related-products -->
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
<!-- zooming-effect -->
	<script src="js/imagezoom.js"></script>
<!-- //zooming-effect -->
</body>
</html>