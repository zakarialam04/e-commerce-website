<?php



  
if(isset($_GET['user_id'])){
  $ip=$_GET['user_id'];
}
   
    function cart_items(){
      
      include('connect.php');
      if(isset($_GET['user_id'])){ 
      $ip = $_GET['user_id'];
      }
      
      if(isset( $ip )) {
          
          $get_ip_address = $ip;
          $sql = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_address'";
          $result = mysqli_query($connect , $sql);
          $count_cart_items = mysqli_num_rows($result);
          
        }
      else {
          $count_cart_items = 0;
      } 
      
      echo $count_cart_items ;
    } 

    
    ?>


