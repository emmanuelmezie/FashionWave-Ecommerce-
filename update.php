<?php
	$product_id = $_REQUEST['product_id'];
	require_once 'class.php';
	$conn = new db_class();
	 $fetch = $conn->product_id($product_id);
	 
	 if(ISSET($_POST['update'])){
        $product_cat = $_POST['product_cat'];	
        $product_title = $_POST['product_title'];
        $product_price = $_POST['product_price'];
        $product_desc = $_POST['product_desc'];
        $product_id = $_POST['product_id'];
		$conn = new db_class();
		$conn->update($product_cat, $product_title, $product_price, $product_desc, $product_id);
		echo '
			<script>alert("Updated Successfully")</script>;
			<script>window.location = "admin.php"</script>;
		';
	}
?>

<div class = "form-group">
	<?php echo "<img src='product_images/".$fetch['product_image']."' width='150px'>" ?>
</div>
<div class = "form-group">
	<label>Product Category</label>
	<input type = "text" name = "product_cat" value = "<?php echo $fetch['product_cat']?>" class = "form-control" />
	<input type = "hidden" name = "product_id" value = "<?php echo $product_id?>" />
</div>
<div class = "form-group">
	<label>Product Title</label>
	<input type = "text" name = "product_title" value = "<?php echo $fetch['product_title']?>" class = "form-control" />
</div>	
<div class = "form-group">
	<label>Product Price</label>
	<input type = "text" name = "product_price" value = "<?php echo $fetch['product_price']?>" class = "form-control" />
</div>
<div class = "form-group">
	<label>Product Description</label>
	<input type = "text" name = "product_desc" value = "<?php echo $fetch['product_title']?>" class = "form-control" />
</div>