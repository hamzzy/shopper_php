<?php


session_start();




if (isset($_POST['add'])){
	

		$item_array_id = array_column($_SESSION["cart"], "id");
		var_dump($item_array_id);
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["cart"]);
			$item_array = array(
			'id' => $_GET["id"],
			'name' => $_POST["name"],
			'price' => $_POST["price"],
			'quantity' => $_POST["quantity"]
			);
			
			$_SESSION["cart"][$count] = $item_array;

		header("location:index.php");
		}
	

        





}



if (isset($_POST['empty'])){
		foreach($_SESSION["cart"] as $keys => $values)
		{
			if($values["id"] == $_GET["id"])
			{
				unset($_SESSION["cart"][$keys]);
				echo '<script>alert("Product has been removed")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
  
}


?>

<script type="text/javascript">
	//window.location='index.php';
</script>