<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your existing head content here -->
</head>
<body>
<?php
include('header.php');

include('connect.php');

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
}
?>
<?php
$get_ip_address = $_GET['user_id'];
if (isset($_GET['update_quantity']) && isset($_GET['add_to_cart'])) {
    $updated_quantity = intval($_GET['update_quantity']);
    $product_id = intval($_GET['add_to_cart']);
    $update_query = "UPDATE cart_details SET quantity='$updated_quantity' WHERE product_id=$product_id AND ip_address='$get_ip_address'";
    mysqli_query($connect, $update_query);
}

if (isset($_GET['delete_product'])) {
  $product_id = intval($_GET['delete_product']);
  $delete_query = "DELETE FROM cart_details WHERE product_id=$product_id AND ip_address='$get_ip_address'";
  mysqli_query($connect, $delete_query);
}


$requete = "SELECT * FROM `cart_details` JOIN `products` ON cart_details.product_id = products.product_id WHERE ip_address='$get_ip_address'";
$result = mysqli_query($connect, $requete);
$count = mysqli_num_rows($result);
$total_price = 0;

if ($count > 0) {
    echo '<h4 style="margin-left:300px;"margin-top:100px">Shopping cart</h4>';
    while ($row = mysqli_fetch_assoc($result)) {
        $product_price = floatval($row['product_price']);
        $quantity = intval($row['quantity']);
        $subtotal = $product_price * $quantity;
        $total_price += $subtotal;

        echo '<div class="container mt-5 mb-5"   >
          <div class="d-flex justify-content-center row" >
              <div class="col-md-8" >
                  
                  <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded" >
                  <div class="mr-1" style=" width:300px"><img class="rounded" src="' . $row['product_img'] . '" style=" width:200px"></div>
                      <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">' . $row['product_name'] . '</span>
                          
                      </div>
                      <div class="d-flex flex-row align-items-center qty" >
                      <a href="?update_quantity=' . ($quantity - 1) . '&add_to_cart=' . $row['product_id'] . '&user_id=' . $user_id . '"><i class="fa fa-minus text-danger"></i></a>
                <h5 class="text-grey mt-1 mr-1 ml-1">' . $quantity . '</h5>
                <a href="?update_quantity=' . ($quantity + 1) . '&add_to_cart=' . $row['product_id'] . '&user_id=' . $user_id . '"><i class="fa fa-plus text-success"></i></a>
                           
                      <div>
                          <h5 style=" margin: 20px;" class="text-grey">' . $row['product_price'] . 'Dhs</h5>
                      </div>
                      <div style=" margin: 20px;" class="d-flex align-items-center"><a href="?delete_product=' . $row['product_id'] . '&add_to_cart=' . $user_id . '&user_id=' . $user_id . '"><i class="fa fa-trash mb-1 text-danger"></i></a></div>
                  </div>
                  
      </div>
      </div>
      </div>
      </div>';
    }
    echo '<div style="text-align: center; margin-top: 50px;"><h3>Total Price: $' . $total_price . '</h3></div>';

    // Handling quantity update logic outside the loop
    
} else {
    echo '<h1 style="margin-left:300px;margin-top:100px ">Shopping cart</h1>
        <h2 style="margin-left:400px;margin-top:100px ; margin-bottom:300px">VOTRE PANIER EST VIDE</h2>';
}

?>


</body>
</html>
<?php include('footer.php') ?>