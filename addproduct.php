<?php
    require_once 'class.php';

	if(ISSET($_POST['create'])){	
    
        /////Adding image to DB
        $dir="product_images/";
        $image=$_FILES['product_image']['name'];
        $temp_name=$_FILES['product_image']['tmp_name']; 

        if($image!="")
        {
            if(file_exists($dir.$image))
            {
                $image=time().'_'.$image;
            }
            $fdir = $dir.$image;
            move_uploaded_file($temp_name,$fdir);
        }

        $product_cat = $_POST['product_cat'];	
        $product_title = $_POST['product_title'];
        $product_price = $_POST['product_price'];
        $product_desc = $_POST['product_desc'];
        $product_image = $image;
        $product_keyword = $_POST['product_keywords'];
		$conn = new db_class();
        $conn->create($product_cat, $product_title, $product_price, $product_desc, $product_image, $product_keyword);
		header('location: admin.php');
    }	
    

    //deletes the product based on the product_id
    
	$product_id = $_REQUEST['product_id'];
	$conn = new db_class();
	$conn->delete($product_id);
    header('location:admin.php');

 
?>