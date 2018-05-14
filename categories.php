<?php
session_start();
/*
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
*/
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
		<link rel="stylesheet" type="text/css" href="style.css">
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
				<a href="index.php" class="navbar-brand"><img src="logo.png" alt="logo"/></a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li class="active"><a href="categories.php"><span class="glyphicon glyphicon-modal-window"></span> Category</a></li>
				<li><a href="aboutus.php"><span class="glyphicon glyphicon-modal-window"></span> About Us</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span> Contact</a></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
			<form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		     </form>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge"> 0 </span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> My Account</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;">
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>


	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category">
				</div>
			</div>
			<div class="col-md-8 col-xs-12">
				<div row>
					<a href="categories.php"><img src='slides_img/slide-2-23.jpg' class="img-responsive" style="border-radius: 10px; margin-bottom:20px;width: 950px;" /></a>				  
				</div>
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">From Our Store</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>			
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