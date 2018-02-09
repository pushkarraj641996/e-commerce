<?php

session_start();

if(isset($_GET['logout'])) 
{
unset($_SESSION['Email']);
unset($_SESSION['name']);
unset($_SESSION['cart']);
}


?>






<!DOCTYPE html>
<html>
<head>
<title>BookLand | Home</title>
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
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="banner-info animated wow zoomIn" data-wow-delay=".5s">
				<h3>Millions of Books</h3>
				<h4>Up to <span>50% <i>Off/-</i></span></h4>
				<div class="wmuSlider example1">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>18 miles of books</p>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>Biographies + Sci-Fi + Romance</p>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>Stunning offers sale !!!</p>
								</div>
							</div>
						</article>
					</div>
				</div>
					<script src="js/jquery.wmuSlider.js"></script> 
					<script>
						$('.example1').wmuSlider();         
					</script> 
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container"> 
			<div class="banner-bottom-grids">
				<div class="banner-bottom-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<div class="grid">
						<figure class="effect-julia">
							<img src="images/4.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3>Book <span>Land</span><i> in online shopping</i></h3>
								<div>
									<p>The internet's largest bookstore.</p>
									<p>A place set aside for books and their friends.</p>
									<p>What's your story?</p>
								</div>
							</figcaption>			
						</figure>
					</div>
				</div>
				<div class="banner-bottom-grid-left1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="images/1.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="banner-bottom-grid-left1-pos">
							<p style="color:black;font-family:Adobe Gothic Std;">Discount 45%</p>
						</div>
					</div>
					<div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="images/2.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="banner-bottom-grid-left1-position">
							<div class="banner-bottom-grid-left1-pos1">
								<p>Latest New Collections</p>
							</div>
						</div>
					</div>
				</div>
				<div class="banner-bottom-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<div class="banner-bottom-grid-left-grid grid-left-grid1">
						<div class="banner-bottom-grid-left-grid1">
							<img src="images/3.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="grid-left-grid1-pos">
							<p>top and classic novels <span>2016 Collection</span></p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- collections -->
	<div class="new-collections">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">New Collections</h3>
			<p class="est animated wow zoomIn" data-wow-delay=".5s">For real book lovers.</p>
			<div class="new-collections-grids">
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="notebook.php" class="product-image"><img src="images/7.jpg" alt=" " class="img-responsive" /></a>
							<div class="new-collections-grid1-image-pos">
								<a href="notebook.php">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="notebook.php">The Notebook</a></h4>
						<p>We love the things we love for what they are.</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>&#8377 350</i> <span class="item_price">&#8377 198</span></p>
						</div>
					</div>
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="superman.php" class="product-image"><img src="images/8.jpg" alt=" " class="img-responsive" /></a>
							<div class="new-collections-grid1-image-pos">
								<a href="superman.php">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="superman.php">Rise of the Superman</a></h4>
						<p>Defeated by None</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>&#8377 781</i> <span class="item_price">&#8377 316</span></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 new-collections-grid">
					<div class="new-collections-grid1 new-collections-grid1-image-width animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="harry.php" class="product-image"><img src="images/5.jpg" alt=" " class="img-responsive" /></a>
							<div class="new-collections-grid1-image-pos new-collections-grid1-image-pos1">
								<a href="harry.php">Quick View</a>
							</div>
							<div class="new-collections-grid1-right new-collections-grid1-right-rate">
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="new-one">
								<p>New</p>
							</div>
						</div>
						<h4><a href="harry.php">Harry Potter's Collection</a></h4>
						<p>Let the Magic Begin.</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>&#8377 4250</i> <span class="item_price">&#8377 2443</span></p>
						</div>
					</div>
					<div class="new-collections-grid-sub-grids">
						<div class="new-collections-grid1-sub">
							<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
								<div class="new-collections-grid1-image">
									<a href="superman.php" class="product-image"><img src="images/6.jpg" alt=" " class="img-responsive" /></a>
									<div class="new-collections-grid1-image-pos">
										<a href="other-side.php">Quick View</a>
									</div>
									<div class="new-collections-grid1-right">
										<div class="rating">
											<div class="rating-left">
												<img src="images/2.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/2.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/2.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/2.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/2.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<h4><a href="other-side.php">The Other Side of Me</a></h4>
								<p>the Master of the Unexpected's greatest story </p>
								<div class="new-collections-grid1-left simpleCart_shelfItem">
									<p><i>&#8377 350</i> <span class="item_price">&#8377 205</span></p>
								</div>
							</div>
						</div>
						<div class="new-collections-grid1-sub">
							<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
								<div class="new-collections-grid1-image">
									<a href="love-story.php" class="product-image"><img src="images/9.jpg" alt=" " class="img-responsive" /></a>
									<div class="new-collections-grid1-image-pos">
										<a href="love-story.php">Quick View</a>
									</div>
									<div class="new-collections-grid1-right">
										<div class="rating">
											<div class="rating-left">
												<img src="images/2.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/1.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/1.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/1.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="images/1.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<h4><a href="love-story.php">Love Story</a></h4>
								<p>Love means never hanging to say your're sorry</p>
								<div class="new-collections-grid1-left simpleCart_shelfItem">
									<p><i>&#8377 199</i> <span class="item_price">&#8377 100</span></p>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="enders-game.php" class="product-image"><img src="images/10.jpg" alt=" " class="img-responsive" /></a>
							<div class="new-collections-grid1-image-pos">
								<a href="enders-game.php">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="enders-game.php">Enders Game</a></h4>
						<p>For Ender Wiggin, it's not a game anymore...</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>&#8377 499</i> <span class="item_price">&#8377 450</span></p>
						</div>
					</div>
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="habbit-winning.php" class="product-image"><img src="images/11.jpg" alt=" " class="img-responsive" /></a>
							<div class="new-collections-grid1-image-pos">
								<a href="habbit-winning.php">Quick View</a>
							</div>
							<div class="new-collections-grid1-right">
								<div class="rating">
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/2.png" alt=" " class="img-responsive" />
									</div>
									<div class="rating-left">
										<img src="images/1.png" alt=" " class="img-responsive" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<h4><a href="habbit-winning.php">Habbit of Winning</a></h4>
						<p>Stories to Inspire, motivate and unleash the winner within...</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i>&#8377 299</i> <span class="item_price">&#8377 206</span></p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //collections -->
<!-- new-timer -->
	<div class="timer">
		<div class="container">
			<div class="timer-grids">
				<div class="col-md-8 timer-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<h3><a href="walk.php">A Walk to Remember</a></h3>
					<div class="rating">
						<div class="rating-left">
							<img src="images/2.png" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="images/2.png" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="images/2.png" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="images/2.png" alt=" " class="img-responsive" />
						</div>
						<div class="rating-left">
							<img src="images/1.png" alt=" " class="img-responsive" />
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="new-collections-grid1-left simpleCart_shelfItem timer-grid-left-price">
						<p><i>&#8377 350</i> <span class="item_price">&#8377 175</span></p>
						<h4>Can you resist the depths of the human heart?<br><br>It is 1958 and seventeen-year-old Landon is revelling in his youth: dating girls and even claiming to have been in love. He is a world apart from shy, reclusive Jamie Sullivan, a Baptist's daughter who carries a bible with her school books, cares for her widowed father and volunteers at the orphanage. But fate will intervene.<br><br>Forced to partner up at the school dance, Landon and Jamie embark on a journey of earth-shattering love and agonising loss far beyond their years. In the months that follow, Landon discovers the true depths of the human heart, and takes a decision that is so stunning it will lead him irrevocably down the road to manhood . . .</h4>
						<p><a class="item_add timer_add"></a></p>
					</div>
					<div id="counter"> </div>
					<script src="js/jquery.countdown.js"></script>
					<script src="js/script.js"></script>
				</div>
				<div class="col-md-4 timer-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<div class="timer-grid-right1">
						<img src="images/17.jpg" alt=" " class="img-responsive" />
						<div class="timer-grid-right-pos">
							<h4>Special Offer</h4>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //new-timer -->
<!-- collections-bottom -->
	<div class="collections-bottom">
		<div class="container">
			<div class="collections-bottom-grids">
				<div class="collections-bottom-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>45% Offer For Comics</h3>
				</div>
			</div>
			<div class="newsletter animated wow slideInUp" data-wow-delay=".5s">
				<h3>Newsletter</h3>
				<p>Join us now to get all news and special offers.</p>
				<form>
					<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					<input type="email" value="Enter your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email address';}" required="">
					<input type="submit" value="Join Us" >
				</form>
			</div>
		</div>
	</div>
<!-- //collections-bottom -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>About Us</h3>
					<p>BOOKLAND Book Store, founded in 1925, is now in its third generation of family ownership. Our enormous stock of antiquarian and out-of-print items fills a six-floor building in midtown Manhattan and a large warehouse in Brooklyn.</span></p>
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
						<a href="superman.php"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="superman.php"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="superman.php"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="superman.php"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="superman.php"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="superman.php"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="superman.php"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="superman.php"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="superman.php"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="superman.php"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="superman.php"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="superman.php"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".8s">
					<h3>Blog Posts</h3>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="superman.php"><img src="images/9.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="superman.php">Nice Product!!!</a></h4>
							<p>Posted On 25/3/2017</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="superman.php"><img src="images/10.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="superman.php">Worth Price</a></h4>
							<p>Posted On 25/3/2017</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
				<h2><a href="index.html">BookLand <span>Educate Us</span></a></h2>
			</div>
			<div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
				<p>&copy 2017 Book Land. All rights reserved</p>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>