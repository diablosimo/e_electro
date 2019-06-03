<?php

include 'inc/header.php';
include 'inc/nav.php';

// Check to see if the cart is in the session data else default to null.
// We do this because the $cart and $count variables are used extensively
// below and will output warnings if we don't.
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    $count = count($cart);
}
$total=0;
?>
<section id="content">
    <div class="content-blog">
        <div class="container">
            <div class="row">
                <div class="page_header text-center">
                    <h2>Panier</h2>
                    <p>voir les elements dans votre panier, appliquer un coupon de réduction ou bien supprimer le produit du panier.</p>
                </div>
            <?php if ($count !== 0) { ?>
                <div class="col-md-12">
                    <table class="cart-table table table-bordered">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>Image</th>
                                <th>Produit</th>
                                <th>Prix unitaire</th>
                                <th>Quantité</th>
                                <th>Total</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                foreach ($cart as $key => $value) {
                                    $cartsql = "SELECT p.IMAGE,p.LIBELLE,s.PRIXUNITAIRE,s.IDSTOCKPRODUIT FROM produit p, stockprdouit s  WHERE p.IDPRODUIT=s.PRODUIT_IDPRODUIT AND IDSTOCKPRODUIT=$key";
                                    $cartr = loadOne($cartsql)
                            ?>
                            <tr>
                                <td>
                                    <a class="remove" href="delcart.php?id=<?php echo $key; ?>"><i class="fa fa-times"></i></a>
                                </td>
                                <td>
                                    <a href="#"><img src="uploads/<?php echo $cartr['IMAGE']; ?>" alt="" height="90" width="90"></a>
                                </td>
                                <td>
                                    <a href="single.php?id=<?php echo $cartr['IDSTOCKPRODUIT']; ?>"><?php echo $cartr['LIBELLE']; ?></a>
                                </td>
                                <td>
                                    <span class="amount"><?php echo $cartr['PRIXUNITAIRE']; ?></span>
                                </td>
                                <td>
                                    <div class="quantity"><?php echo $value['quantity']; ?></div>
                                </td>
                                <td>
                                    <span class="amount"><?php echo getenv('STORE_CURRENCY') .  ($cartr['price']*$value['quantity']); ?></span>
                                </td>
                            </tr>
                            <?php
                                    global $total;
                                    $total = $total + ($cartr['price']*$value['quantity']);
                                }
                            ?>
                            <tr>
                                <td colspan="6" class="actions">
                                    <div class="col-md-6">
                                        <div class="coupon">
                                            <label>Coupon:</label><br>
                                            <input placeholder="Coupon code" type="text"><button type="submit">Apply</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="cart-btn">
                                            <a href="<?php echo getenv('STORE_URL')."/complete-php7-ecom-website-0.5.0"; ?>/checkout.php" class="button btn-md" style="color:white;">Checkout</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_totals">
                    <div class="col-md-6 push-md-6 no-padding">
                        <h4 class="heading">Cart Totals</h4>
                        <table class="table table-bordered col-md-6">
                            <tbody>
                                <tr>
                                    <th>Cart Subtotal</th>
                                    <td><span class="amount"><?php echo getenv('STORE_CURRENCY') . $total; ?></span></td>
                                </tr>
                                <tr>
                                    <th>Shipping and Handling</th>
                                    <td>Free Shipping</td>
                                </tr>
                                <tr>
                                    <th>Order Total</th>
                                    <td><strong><span class="amount"><?php echo getenv('STORE_CURRENCY') . $total; ?></span></strong> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php } else { ?>
                <div class="col-md-6 col-md-offset-3">
                    <h2>Your shopping cart is empty. It's pretty lonely over here, why not add something to it?</h2>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php include INC . 'footer.php'; ?>
