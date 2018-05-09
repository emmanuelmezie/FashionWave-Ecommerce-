<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Fashion Wave</title>
		<link rel="stylesheet" href="..\css\bootstrap.min.css"/>
		<script src="..\js\jquery2.js"></script>
		<script src="..\js\bootstrap.min.js"></script>
		<script src="..\main.js"></script>
		<link rel="stylesheet" type="text/css" href="..\style.css">
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
				<a href="index.php" class="navbar-brand">Fashion Wave</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="..\index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li class="active"><a href="admin/index.php"><span class="glyphicon glyphicon-home"></span> Add Products</a></li>
				<li><a href="..\categories.php"><span class="glyphicon glyphicon-modal-window"></span> Category</a></li>
				<li><a href="..\aboutus.php"><span class="glyphicon glyphicon-modal-window"></span> About Us</a></li>
				<li><a href="..\contact.php"><span class="glyphicon glyphicon-modal-window"></span> Contact</a></li>
			</ul>
		</div>
	</div>
</div>	
		<p><br/></p>
		<p><br/></p>
	<div class="container-fluid">
			<div class="row">
						<div class="col-md-10 col-md-offset-1 col-xs-12">
                        <table class = "table table-bordered table-hover">
                            <thead>
                                    <th>Product Name</th>
                                    <th>Product</th>
                                    <th>Product Price</th>
                                    <th>Product Description</th>
                                    <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                    require 'class.php';
                                    $conn = new db_class();
                                    $read = $conn->read();
                                    while($fetch = $read->fetch_array()){ 
                                ?>
                                    <tr>
                                        <td><?php echo $fetch['product_title']?></td>
                                        <td><?php echo "<img src='../product_images/".$fetch['product_image']."' width='150px'>" ?></td>
                                        <td><?php echo "$" . $fetch['product_price']?></td>
                                        <td><?php echo $fetch['product_desc']?></td>
                                        <td><center>
                                        <a class = "btn btn-warning btn-sm update_product_id" data-toggle = "modal" data-target = "#update_modal" name = "<?php echo $fetch['product_id']?>">
                                        <span class = "glyphicon glyphicon-edit"></span> Update</a> | 
                                        <a class = "btn btn-danger btn-sm del_product_id" name = "<?php echo $fetch['product_id']?>" data-toggle = "modal" data-target="#del_modal"><span class = "glyphicon glyphicon-trash"></span> Delete</a>
                                        </center></td>
                                    </tr>
                                <?php
                                    }
                                ?>	
                            </tbody>
                        </table>
						</div>
			</div>
	</div>

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

    <!-- Modal -->
<div class="modal fade" id="del_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
		<center><h4 class = "text-danger">Are you sure you want to delete this product?</h4></center>
      </div>
      <div class="modal-footer">
        <button type = "button" class="btn btn-warning" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> No</button>
        <button type = "button" class="btn btn-danger del_mem"><span class = "glyphicon glyphicon-trash"></span> Yes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="update_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class = "modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h3 class = "text-success modal-title">Update Product</h3>
		</div>
		<form method = "POST" action = "update.php">
		<div class="modal-body update">
 
        </div>
      <div class="modal-footer">
        <button class="btn btn-warning" name = "update"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
      </div>
	  </form>
    </div>
  </div>
</div>
		
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
 
		//Delete
		$('.del_product_id').on('click', function(){
			$product_id = $(this).attr('name');
			$('.del_mem').on('click', function(){
				window.location = "index.php?product_id=" + $product_id;
			});
		});
 
		//Update
		$('.update_product_id').on('click', function(){
			$product_id = $(this).attr('name');
			$('.update').load('update.php?product_id=' + $product_id);
		});
	});
</script>
</html>
