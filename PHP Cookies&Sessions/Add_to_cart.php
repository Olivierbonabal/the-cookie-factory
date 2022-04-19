<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<?php
	if(!isset($_SESSION['user'])) {
		header('location: login.php');
	}
?>
<?php
if(isset($_GET['add_to_cart'])) {
	
	$idProduct = $_GET['add_to_cart'];

	foreach($catalog as $id => $cookie){

	  if( $id == $idProduct ){ 

	    $productName = $cookie['name'];

	    setcookie('product['.$id.']',$productName);

	    header('location: cart.php');
		}
	}
}
?>