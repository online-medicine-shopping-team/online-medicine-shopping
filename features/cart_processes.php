<?php 
session_start();


	if(isset($_GET['name']) and $_GET['cat_name'] and $_GET['price'])
	{
		//add item

       
		$_SESSION['cart'][] = array('name'=>$_GET['name'],
                                    'cat_name'=>$_GET['cat_name'],
                                    'price'=>$_GET['price'],
                                    'qty'=>1,
                                    // 'pro_desc'=>$_GET['pro_desc'],
									// 'image'=>$_GET['image']
								);
	header("location:../cart.php");
	}
	else if(isset($_GET['id']))
	{
		//del a item
		//id from the cart to be delet
		$id = $_GET['id'];
		unset($_SESSION['cart'][$id]);
		header("location:../cart.php");
	}
	else if(!empty($_POST))
	{
		//update qty
		//recalculate
		foreach($_POST as $id=>$val)
		{
			$_SESSION['cart'][$id]['qty']=$val;
			header("location:../cart.php");
		}
	}
	else{
		echo "undefined cart session";
	}













?>

