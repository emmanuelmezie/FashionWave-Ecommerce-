<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>About Fashion Wave</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	</head>
<body>
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
				<li><a href="categories.php"><span class="glyphicon glyphicon-modal-window"></span> Category</a></li>
				<li><a href="aboutus.php"><span class="glyphicon glyphicon-modal-window"></span> About Us</a></li>
				<li class="active"><a href="contact.php"><span class="glyphicon glyphicon-modal-window"></span> Contact</a></li>
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
	<div class="container-fluid">
			<div class="row">
				<div class="container">
						<div class="col-md-11 col-md-offset-1 col-xs-12">
							 <div class="row">
							 	<h1>Customer Service</h1>
							 	<hr/>
							 	
							 </div>
							 <div class="row">
							 	<div class="col-md-5 col-xs-12">
							 		<p style="font-size:16px;">Our Customer Service team is always keen to help you, so please send us an email using the contact form.</p>
								 	  <form role="form">
									      <div class="form-group">
									        <label>First Name:</label>
									        <input type="text" class="form-control" name="firstname" required>
									      </div>
									       <div class="form-group">
									        <label>Last Name:</label>
									        <input type="text" class="form-control" name="lastname" required>
									      </div>
									      <div class="form-group">
									        <label>Email:</label>
									        <input type="email" class="form-control" name="email" required>
									      </div>
									      <div class="form-group">
									        <label>Email:</label>
									        <textarea class="form-control" name="message" required></textarea>
									      </div>
									 
									        <button type="submit" class="btn btn-default">Send Message</button>
									  </form>
							    </div>
							    	<div class="col-md-5 col-md-offset-1 col-xs-12">
							 		<h2>Frequently Asked Questions</h2>
							 		<ol style="font-size: 16px;">
								 		 <li>What delivery service do you offer?
								 		 	<ul>
								 		 		<li>We aim to start delivery as soon as possible</li>
								 		 	</ul>
								 		 </li>
								 		 <li>How long will my delivery take?
								 		 	<ul>
								 		 		<li>We aim to start delivery as soon as possible</li>
								 		 	</ul>
								 		 </li>
								 		 <li>What can i do if i am not happy with my online order?
								 		 	<ul>
								 		 		<li>If you are unhappy with a purchase you have made from our online store, you can return it to us following the instructions on your returns form or to any of our stores with your invoice within 28 days of purchase.</li>
								 		 	</ul>
								 		 </li>
								 	</ol>
									 <button type="submit" class="btn btn-primary" data-toggle = "modal" data-target = "#return">Return Policy</button>
									 <div class="modal fade" id="return" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-body">
												<h3>Fashion Wave ONLINE RETURNS</h3>

												<p>
												 We are unable to offer free shipping for returns on sale items.
												If you wish to return a sale item, please send back using your Collect+ label and we will deduct £3.95 from the refundable total.
												We include the Free Post returns information with your order.
												</p>
												<p>
												You must obtain Proof of Postage when sending parcels to us as the items are your responsibility until they are received by our warehouse.
												We are unable to accept online returns in our stores, please follow the below instructions to return an online purchase.
												</p>

												<h3>RETURNS INSTRUCTIONS</h3>

												<p>
												We want you to be 100% delighted with your purchase. You can let us know you want to return an item up to 14 days from the day your order is delivered. 
												You then have a further 14 days to return the item to us. 
												</p>

												<p>
												Please note, all returned items must be unworn and have tags attached. Until we receive your return to our warehouse, the items and their condition are your 
												responsibility Collect+ Fuss Free Returns If you are a UK customer you can return your order free via any local supermarket, newsagent or corner shop that 
												offers the Collect+ service. There are thousands of shops nationwide offering the service and Collect+ shops have extended opening hours, with many shops
												open seven days a week.
												</p>
												</div>
											</div>
										</div>
									</div>

									 <button type="submit" class="btn btn-default" data-toggle = "modal" data-target = "#delivery">Delivery Policy</button>
									 <div class="modal fade" id="delivery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-body">
												<h3>SHIPPING RATES AND DELIVERY TIMES</h3>

												<p>
												Shipping Rates & Delivery
												Free for a limited time only Economy Courier Delivery in the UK on orders over £50.00
												Please select the Free Option at the checkout to take advantage of this
												</p>
												<p>
												IMPORTANT NOTE: Orders must be received by 2pm Monday-Friday to be processed the same day. Any item ordered after 2pm or 
												at the weekend will be processed and dispatched the next working day. 
												</p>
												<p>
												Please bear this in mind with our Next Day and 48 Hour Delivery promise.by our warehouse.
												We are unable to accept online returns in our stores, please follow the below instructions to return an online purchase.
												</p>
												</div>
											</div>
										</div>
									</div>

									 <button type="submit" class="btn btn-primary" data-toggle = "modal" data-target = "#service">Service Policy</button>
									 <div class="modal fade" id="service" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-body">
												<h3>Service Policy</h3>
												<p>
												Your use of a LimeRoad website www.limeroad.com (hereinafter referred to as "LimeRoad/ LimeRoad Website/ Website") and 
												its services and tools are governed by the following terms and conditions ("Terms of Use"). 
												If You transact on LimeRoad, You shall be subject to the policies that are applicable to the website for such transaction. 
												</p>
												
												</div>
											</div>
										</div>
									</div>
							    </div>
							 </div>


						</div>
				</div>
			</div>
	</div>

	<p><br/></p>
	<p><br/></p>


	<div class="container-fluid" style="background:#000000;height:50px; position: fixed; bottom: 0;width: 100%;">	
				<div class="row" style="background:#000000;color:#ffffff; margin-top:20px;">
					<div align="center" style="font-size: 14px;color:#c2c2c2;">&copy; 2018 Copyright: Fashion Wave</div>
				</div>
	</div>
		
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</html>
















































