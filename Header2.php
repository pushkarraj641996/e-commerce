<?php
// $p = $_GET['remark'];

if(isset($_SESSION['name']))
{
	$p = $_SESSION['name'];
}
?>




<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
						<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="index.php?logout">Logout</a></li>
						<li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="My-order.php">My Orders</a></li>
					</ul>
				</div>
				<div class="header-grid-right animated wow slideInRight"  data-wow-delay=".5s">
					<ul class="social-icons">
						<li>Welcome <?php echo "$p" ?></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>