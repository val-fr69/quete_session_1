<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php' ?>
<?php 
    if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
    }
?>

<section class="cookies container-fluid">
    <div class="row">
    <?php if (!isset($cart)): ?>
            <p>Cart is empty</p>

        <?php else: ?>
            
            <ul>
                <?php foreach ($cart as $productId => $quantity) { ?>
                    <li><?= $catalog[$productId]['name'] . " quantity : " . $quantity ?></li>
                <?php } ?>
            </ul>

        <?php endif; ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
