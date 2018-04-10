<?php

if(isset($_POST['produit_46'])){

    $value1 =$_COOKIE['pinuts']+1;
    setcookie("pinuts", $value1, time()+3600);  /* expire dans 1 heure */

}
if(isset($_POST['produit_36'])) {
    $value2 = $_COOKIE['choco']+1;
    setcookie("choco", $value2, time() + 3600);  /* expire dans 1 heure */
}
if(isset($_POST['produit_58'])){
    $value3 = $_COOKIE['chips']+1;
    setcookie("chips", $value3, time()+3600);  /* expire dans 1 heure */

}

if(isset($_POST['produit_32'])){

    $value4 =$_COOKIE['mms']+1;
    setcookie("mms", $value4, time()+3600);  /* expire dans 1 heure */
}

header('Location: index.php');
