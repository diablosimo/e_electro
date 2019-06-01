
<?php
// Check to see if the cart is in the session data else default to null.
// We do this because the $cart and $count variables are used extensively
// below and will output warnings if we don't.
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    $count = count($cart);
} else {
    $count = 0;
}
$cartTotal=0;

?>
<div class="menu-wrap">
    <div id="mobnav-btn">Menu <i class="fa fa-bars"></i></div>
    <ul class="sf-menu">
        <li>
            <a href="/electro/index.php">Home</a>
        </li>
        <li>
            <a href="#">Shop</a>
            <div class="mobnav-subarrow"><i class="fa fa-plus"></i></div>
            <ul>
            </ul>
        </li>
        <li>
            <a href="#">My Account</a>
            <div class="mobnav-subarrow"><i class="fa fa-plus"></i></div>
            <ul>
                <li><a href="/electro/my-account.php">My Orders</a></li>
                <li><a href="/electro/edit-address.php">Update Address</a></li>
                <?php if (!isset($_SESSION['customer']) & empty($_SESSION['customer'])) : ?>
                    <li><a href="/electro/login.php">Sign In</a></li>
                <?php else : ?>
                    <li><a href="/electro/logout.php">Logout</a></li>
                <?php endif; ?>
            </ul>
        </li>
        <li>
            <a href="/electro/contact.php">Contact</a>
        </li>
    </ul>
    <div class="header-xtra">
        <div class="s-cart">
            <div class="sc-ico"><i class="fa fa-shopping-cart"></i><?php
                if ($count !== 0) {
                    echo "<em>" . count($cart) . "</em>";
                } ?></div>
            <div class="cart-info">
                <small><?php
                    if ($count !== 0 && $count !== 1) {
                        echo 'You have <em class="highlight"> ' . $count . ' items</em> in your shopping cart.';
                    } else if ($count === 1) {
                        echo 'You have <em class="highlight"> 1 item</em> in your shopping cart.';
                    } else {
                        echo 'Your shopping cart is empty. It\'s pretty lonely over here, why not add something to it?';
                    } ?>
                </small>
                <br>
                <br>

                    <div class="ci-total">Subtotal: <?php echo getenv('STORE_CURRENCY') . $cartTotal; ?></div>
                    <div class="cart-btn">
                        <a href="<?php echo getenv('STORE_URL')."/complete-php7-ecom-website-0.5.0"; ?>/cart.php">View Cart</a>
                        <a href="<?php echo getenv('STORE_URL')."/complete-php7-ecom-website-0.5.0"; ?>/checkout.php">Checkout</a>
                    </div>

            </div>
        </div>
        <div class="s-search">
            <div class="ss-ico"><i class="fa fa-search"></i></div>
            <div class="search-block">
                <div class="ssc-inner">
                    <form>
                        <input type="text" placeholder="Type Search text here...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</header>
