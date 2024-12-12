<?php
include("conn.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Initialize 'cart' if not set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Remove item from cart
if (isset($_POST['remove_item']) && isset($_POST['remove_key'])) {
    $remove_key = $_POST['remove_key'];
    
    if (isset($_SESSION['cart'][$remove_key])) {
        unset($_SESSION['cart'][$remove_key]);
        // Optional: Reindex the array
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
}

// Add item to cart
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];

    $cart_item = [
        'id' => $product_id,
        'name' => $product_name,
        'image' => $product_image,
        'unit_price' => (float)$product_price,
        'price' => (float)$product_price,
        'quantity' => 1
    ];

    $found = false;
    
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $product_id) {
            $item['quantity'] += 1;
            $item['price'] = (float)$item['unit_price'] * $item['quantity'];
            $found = true;
            break;
        }
    }

    if (!$found) {
        $_SESSION['cart'][] = $cart_item;
    }
}

// Update quantities and recalculate totals
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_cart'])) {
    if (isset($_POST['quantities']) && is_array($_POST['quantities'])) {
        foreach ($_POST['quantities'] as $key => $quantity) {
            $quantity = max(1, intval($quantity)); // Ensure quantity is at least 1
            if (isset($_SESSION['cart'][$key])) {
                $_SESSION['cart'][$key]['quantity'] = $quantity;
                $_SESSION['cart'][$key]['price'] = $_SESSION['cart'][$key]['unit_price'] * $quantity;
            }
        }
    }
}

// Define VAT and shipping fee
$vat_percentage = 0.12; // 12% VAT
$shipping_fee = 50; // Rs. 50 for shipping
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sagar Uniwears</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/font-icons.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
<div class="body-wrapper">
    <?php include("header.php");?>

    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 bg-overlay-theme-black-90 bg-image" data-bg="img/bg/5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="section-title white-color">Cart</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="liton__shoping-cart-area mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping-cart-inner">
                        <div class="shoping-cart-table table-responsive">
                            <?php if (!empty($_SESSION['cart'])): ?>
                                <form method="post" action="">
                                    <table class="table">
                                        <tbody>
                                            <?php  
                                            $cartSubtotal = 0.0;
                                            foreach ($_SESSION['cart'] as $key => $item) {
                                                $item_total = $item['unit_price'] * $item['quantity'];
                                                $cartSubtotal += $item_total;
                                            ?>
                                            <tr>
                                                <td class="cart-product-remove">
                                                    <form method="post" action="">
                                                        <input type="hidden" name="remove_key" value="<?= $key ?>">
                                                        <button type="submit" name="remove_item">x</button>
                                                    </form>
                                                </td>
                                                <td class="cart-product-image">
                                                    <img src="<?= $site ?>admin/uploads/product/cat_pd_image/<?= htmlspecialchars($item['image']); ?>" alt="<?= htmlspecialchars($item['name']); ?>" width="50" height="50">
                                                </td>
                                                <td class="cart-product-info">
                                                    <h4><?= htmlspecialchars($item['name']); ?></h4>
                                                </td>
                                                <td class="cart-product-price">Rs. <?= number_format($item['unit_price'], 2) ?></td>
                                                <td class="cart-product-quantity">
                                                    <input type="number" name="quantities[<?= $key ?>]" 
                                                           value="<?= $item['quantity'] ?>" 
                                                           min="1" class="cart-plus-minus-box">
                                                </td>
                                                <td class="cart-product-total">Rs. <?= number_format($item_total, 2) ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <div class="btn-wrapper">
                                        <button type="submit" name="update_cart" class="theme-btn-1 btn btn-effect-1">Update Cart</button>
                                    </div>
                                </form>
                            <?php else: ?>
                                <p>Your cart is empty!</p>
                            <?php endif; ?>
                        </div>

                        <?php if (!empty($_SESSION['cart'])): ?>
                            <div class="shoping-cart-total mt-50">
                                <h4>Cart Totals</h4>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Cart Subtotal</td>
                                            <td>Rs. <?= number_format($cartSubtotal, 2) ?></td>
                                        </tr>
                                        <tr>
                                            <td>Shipping Fee</td>
                                            <td>Rs. <?= number_format($shipping_fee, 2) ?></td>
                                        </tr>
                                        <tr>
                                            <td>VAT (<?= $vat_percentage * 100 ?>%)</td>
                                            <td>Rs. <?= number_format($cartSubtotal * $vat_percentage, 2) ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Order Total</strong></td>
                                            <td><strong>Rs. <?= number_format($cartSubtotal + ($cartSubtotal * $vat_percentage) + $shipping_fee, 2) ?></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="btn-wrapper text-right">
                                    <a href="checkout.php" class="theme-btn-1 btn btn-effect-1">Proceed to Checkout</a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include("footer.php");?>
</body>
</html>
