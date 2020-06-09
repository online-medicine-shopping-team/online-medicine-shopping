<?php
session_start();


if (isset($_GET['name']) and $_GET['cat_name'] and $_GET['price']) {
	//add item

	$_SESSION['cart'][] = array(
		'pro_id' => $_GET['pro_id'],
		'name' => $_GET['name'],
		'cat_name' => $_GET['cat_name'],
		'price' => $_GET['price'],
		'qty' => 1,
	);
	header("location:../cart.php");

} else if (isset($_GET['id'])) {
	//del a item
	//id from the cart to be delet
	$id = $_GET['id'];
	unset($_SESSION['cart'][$id]);
	header("location:../cart.php");

} else if (!empty($_POST)) {
	//update qty
	//recalculate
	foreach ($_POST as $id => $val) {
		if ($val == 0)
			unset($_SESSION['cart'][$id]);
		else
			$_SESSION['cart'][$id]['qty'] = $val;
	}
	header("location:../cart.php");
	
} else {
	echo "undefined cart session";
}
