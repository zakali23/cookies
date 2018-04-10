
<?php session_start(); ?>
<?php  if (!isset($_SESSION['loginName'])) {
   header('Location:login.php');}?>
<?php require 'inc/head.php'; ?>
<p style ="text-align:right; font-size:18px;padding-right: 10px;"><a href="logout.php">logout</a></p>
<section class="cookies container-fluid">
  <div class="row">
  <form class="" action="cookies.php" method="post">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>

            <button  href="?add_to_cart=46" class="btn btn-primary" name="produit_46" value= "Pecan_nuts" type="submit">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
            </button>
        </figcaption>
      </figure>
    </div>
  </form>
  <form class="" action="cookies.php" method="post">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
          <button  href="?add_to_cart=36" class="btn btn-primary" name="produit_36" value= "Chocolate_chips" type="submit">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </button>
        </figcaption>
      </figure>
    </div>
  </form>
  <form class="" action="cookies.php" method="post">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
            <button  href="?add_to_cart=58" class="btn btn-primary" name="produit_58" value= "Chocolate_cookie" type="submit">
             <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
            </button>
        </figcaption>
      </figure>
    </div>
  </form>
  <form class="" action="cookies.php" method="post">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
          <button  href="?add_to_cart=32" class="btn btn-primary"  name="produit_32" value= "M&M's_cookie" type="submit">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </button>
        </figcaption>
      </figure>
    </div>
  </form>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
