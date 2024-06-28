<!DOCTYPE html>
<?php 
include('connect.php');
$sql = "SELECT * FROM `users`";
$result = mysqli_query($connect,$sql);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<header>
      <div class="hero">
        <nav>
          <div class="logo"><img src="LOGOZL-removebg-preview.png" alt=""></div>
          <div class="navlinks">
          <a class="login" href="admin.php"><i class="fa-solid fa-user"></i> </a>
            
            <a href="login.php" class="cart_shop" style="font-size: smaller;"><i class="fa-solid fa-right-from-bracket"></i> LOG OUT</a>         
      </div>
          
        </nav>
        
      </div>
</header>

<div class="container mt-5 ">
    <div class="row">
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-danger">
                        <h5 class="card-title"><?php echo $row['username'] ?></h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive"> <!-- Apply table-responsive here -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $user_id = $row['user_id'];
                                    $orders_query = "SELECT * FROM `cart_details` JOIN `products` ON cart_details.product_id = products.product_id WHERE ip_address='$user_id'";
                                    $orders_result = mysqli_query($connect,$orders_query);
                                    $total_price = 0; // Initialize total price for this user
                                    while ($order = mysqli_fetch_assoc($orders_result)) {
                                        ?>
                                        <tr>
                                            
                                            <td><img src="<?php echo $order['product_img']; ?>" alt="Product Image" class="img-fluid"></td>
                                            <td><?php echo $order['product_name']; ?></td>
                                            <td><?php echo $order['quantity']; ?></td>
                                            <td><?php echo ''.$order['product_price'].'Dhs'; ?></td>
                                        </tr>
                                        <?php 
                                            // Calculate subtotal and add to total price for this user
                                            $subtotal = $order['quantity'] * $order['product_price'];
                                            $total_price += $subtotal;
                                        ?>
                                    <?php } ?>
                                    <tr>
                                    <td></td>
                                        <td></td>
                                        <td  ><strong>Total Price:</strong></td>
                                        
                                        <td ><?php echo ''.$total_price.'Dhs'; ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                             <button type="button" class="btn btn-primary btn-lg text-white mb-0 me-0">Confirm</button>
                                        </td>
                                        <td>
                                           <a href="orders.php"> <button  type="button" class="btn btn-primary btn-lg text-white mb-0 me-0">Delete</button></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

</body>
</html>
