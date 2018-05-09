<?php


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Fashion Wave</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Fashion Wave</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="categories.php"><span class="glyphicon glyphicon-modal-window"></span> Category</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span> About Us</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span> Contact</a></li>
			</ul>
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">Cart Checkout</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-xs-2"><b>Action</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Image</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Name</b></div>
							<div class="col-md-2 col-xs-2"><b>Quantity</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Price</b></div>
							<div class="col-md-2 col-xs-2"><b>Price in $</b></div>
						</div>
						<div id="cart_checkout"></div>
						
						</div> 
					</div>
				</div>
			</div>
			
		</div>

		<p><br/></p>
		<p><br/></p>
		<p><br/></p>

		<div class="container-fluid" style="background:#3E4551;height:70px;">	
				<div class="row" style="color:#ffffff; margin-top:2px;">
					<div align="center" style="font-size:35px;">
						<ul class="list-unstyled list-inline">
				            <li class="list-inline-item">
				                <a class="btn-floating btn-lg">
				                    <i class="fa fa-facebook"> </i>
				                </a>
				            </li>
				            <li class="list-inline-item">
				                <a class="btn-floating btn-lg" style="color:#ffffff;">
				                    <i class="fa fa-twitter"> </i>
				                </a>
				            </li>
				            <li class="list-inline-item">
				                <a class="btn-floating btn-lg">
				                    <i class="fa fa-linkedin"> </i>
				                </a>
				            </li>
				            <li class="list-inline-item">
				                <a class="btn-floating btn-lg" style="color:#ffffff;">
				                    <i class="fa fa-dribbble"> </i>
				                </a>
				            </li>
				        </ul>
					</div>
				</div>
	</div>

	<div class="container-fluid" style="background:#000000;height:50px;">	
				<div class="row" style="background:#000000;color:#ffffff; margin-top:20px;">
					<div align="center" style="font-size: 14px;color:#c2c2c2;">&copy; 2018 Copyright: Fashion Wave</div>
				</div>
	</div>
</body>	
</html>
















		