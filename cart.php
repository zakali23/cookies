<?php require 'inc/head.php'; ?>
<p style ="text-align:right; font-size:18px;padding-right: 10px;"><a href="logout.php">logout</a></p>
<?php
if (!empty($_COOKIE['pinuts']) || !empty($_COOKIE['choco']) || !empty($_COOKIE['chips']) ||  !empty($_COOKIE['mms'])){

    ?><h1><?= $_COOKIE['pinuts']." Pecan nuts";?></h1>
<h1><?=$_COOKIE['choco']." Chocolate cookie";?></h1>
<h1><?=$_COOKIE['chips']." Chocolate chips";?></h1>
<h1><?=$_COOKIE['mms']." M&M's© cookies";?></h1>
<?php
}
?>


<?php require 'inc/foot.php'; ?>
