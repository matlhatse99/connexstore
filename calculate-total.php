<?php 
    $total = 0;
    
    foreach ($_SESSION as $key=>$val){
    echo("<br>");
    echo("<br>");
    $product_id_number_without_p = substr($key, -6);    // returns "f"
    $name = return_info($conn, 'products', 'name', 'id', $product_id_number_without_p);
    $price = return_info($conn, 'products', 'price', 'id', $product_id_number_without_p);
    $image = return_info($conn, 'products', 'image', 'id', $product_id_number_without_p);
    

    echo("
    <form action='load-page.php' method='post'>
    <img src='images/$image' style='width:100px;'>
    $name $image
        <button class='btn add-to-cart' name='remove_from_cart' type='submit'>
            <i class='material-icons shopping-cart'></i>
            Remove from cart
        </button>
        <input type='hidden' name='id' value='$product_id_number_without_p'>
    </form>

    ");
    $total += floatval($price);
    
    }
    echo("<a  href='checkoutpage.php' button type='button' class='btn btn-primary' style='width: 10%; height: 5%; margin-top: 3%; margin-right: 3%; margin-left: 3%;'>Checkout</button></a>
    ");
?>
