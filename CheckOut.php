<!DOCTYPE html>
<html>
<head>
<title>BookLand | Cart</title>
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
    width: 1000px%;
}

th, td {
    text-align: left;
    padding: 8px;
}



th {
    background-color: orange;
    color: white;
}

.button5 {
    background-color: orange; /* Green */
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}


.button4 {border-radius: 12px;}
</style>
</head>
<body>
<?php


session_start();

if(isset($_GET['logout'])) 
{
unset($_SESSION['Email']);
unset($_SESSION['name']);
}




include 'Connection.php';



if(!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();

}

?>
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
							<li><a href="mail.html">Mail Us</a></li>
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
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Cart</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->


	<div class="checkout">
		<div class="container">
			<h3 class="animated wow slideInLeft" data-wow-delay=".5s">CHECKOUT :<span></span></h3>
			<div class="checkout-right animated wow slideInUp" data-wow-delay=".5s">
		<form name = "checkout" action="check.php" method="post" onsubmit = "return validation5()">
      <table width="1038" border="0" cellspacing="5" cellpadding="5" style="font-family:Futura Lt BT; font-weight:400;">
        <tr>
          <td colspan="2" style = "background-color:orange; color:white;"><strong>Shipping Info </strong> </td>
          <td colspan="2"style = "background-color:orange; color:white;"><strong>Shipping Method </strong></td>
          <td colspan="2"style = "background-color:orange; color:white;"><strong><strong>Payment Method</strong> </td>
          <td width="93">&nbsp;</td>
          <td width="112">&nbsp;</td>
        </tr>
        <tr>
          <td width="91">First Name </td>
          <td width="172"><input name="sfname" type="text" class="in9" id="sfname" size="20" placeholder="First Name" maxlength = 10 tabindex="1" onblur = "alphabet()" required/>
          <td width="60"><input name = "shipcharge" type="radio" value="Free Shipping"tabindex="10">          
          &#8377 0.00</td>
          <td width="127">Free Shipping </td>
          <td width="20"><div align="center">
              <input name = "payment" type="radio" onClick="c2(this)" value="Cash on delivery" tabindex="12">
          </div></td>
          <td width="181">Cash on delivery </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> Last Name </td>
          <td><input name="slname" type="text" class = "in9" id="slname" placeholder="Last Name" maxlength = 10 tabindex="2" onblur = "alphabet2()" required/></td>
          <td><input name = "shipcharge" type="radio" value="Standard Shiping" tabindex="11"required/>
            &#8377 8.50 </td>
          <td>Standard Shipping </td>
          <td><div align="center">
            <input name = "payment" type="radio" onClick="c(this)" value="Credit Card" tabindex="13" required/>
          </div>
          <td> Credit Card </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> Email </td>
          <td><input name="semail" type="email" class = "in9" id="semail" placeholder="E-mail" tabindex="3" onblur = "validateE()"required/></td>
          <td colspan="4" rowspan="5">   <div id ="creditcard" style="visibility:hidden;">       <table cellspacing="5" cellpadding="5" style = "border :1px solid #07aaf6; border-radius:5px;">
            
              
            </tr>
                    </table> </div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> Address </td>
          <td><textarea name="Address" cols = 23  rows = 3 class = "in10" tabindex="4" required></textarea></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> Country </td>
          <td><select name="select"  class="in11" tabindex="5">
			<option value="africa">Africa</option>
			<option value="asia">Asia</option>
		<option value="australia">Australia/Pacific</option>
		<option value="europe">Europe</option>
		<option value="noamer">North America</option>
		<option value="soamer">South America</option>
		<option value="India" selected>India</option>
                      </select>          </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td> State </td>
          <td><input name="state" type="text" size="20" placeholder="State" maxlength = 10 tabindex="1" onblur = "alphabet()" required/>
   	

        <tr>
          <td> City </td>
          <td><input name="city" type="text" size="20" placeholder="city" maxlength = 10 tabindex="1" onblur = "alphabet()" required/>
            
        <tr>
          <td> Zip code </td>
          <td><input name="zcode" type="text" class = "in9" placeholder="Zip Code" onblur = "numb2()" tabindex="8"/></td>
          <td colspan="6"><strong><p style = "background-color:white; color:orange; padding:5px;">Your Order</p></strong></td>
        </tr>
        <tr>
          <td> Contact </td>
          <td><input name="contact" type="text" class = "in9"  placeholder="+91" tabindex="9" maxlength = 10 onblur = "numb()" required/></td>
          <td colspan="6" rowspan="5">

<?php

echo "<table cellspacing = 5 cellpadding = 3 width = 700> <tr align = center  style = 'background-color:orange;'>";

echo "<b><td> <strong>SL No <td> <strong> Product Name <td><strong> Price <td><strong>Quantity<td> <strong> <strong>Sub Total </td><tr>";		
	
$tp2 = 0;

foreach ($_SESSION["cart"] as $item)
{
	
	$i = $item['bid'];
	$tp = $item['quant'] * $item['price'];
	$tp2 += $tp;

	echo "<td align = 'center'> ".$item['bid'];
	echo "<td align = 'center'> ".$item['title'];
	echo "<td align = 'center'>&#8377 ".$item['price'];
	echo "<td align = 'center'> ".$item['quant'];	
	echo "<td align = 'center'>&#8377 ".$tp2;
	
	echo "<tr>";
	
	
}
$gst = 0.05*$tp2;

	echo "</tr>";
	echo "<tr style = 'background-color:green;'> <td colspan = 4 align = right>Grand Total : <td align = 'center'> <font style = 'font-family:Rupee Foradian'><strong> ` </font>&#8377 ".($tp2+$gst);
	echo "<td> </tr></table>";	
?>          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="6">          
            
            <div align="right">
              <button class="button5 button4" input type="submit" class = "Addtocart" name="submit">Place Your Order</button>
            </div></td>
        </tr>
      </table>
	</form>
	</div>
</div>
</div>
</div>
<?php	

//}

//else
	
//{
	//echo "<h2 style = 'color:red;'> Please Login First or Sign up Now......</h2>";

//}


//?>

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
						<a href="single.html"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".8s">
					<h3>Blog Posts</h3>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="single.html"><img src="images/9.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="single.html">Nice Product!!!</a></h4>
							<p>Posted On 25/3/2017</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="single.html"><img src="images/10.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="single.html">Worth Price</a></h4>
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