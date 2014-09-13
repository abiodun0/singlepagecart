<?php

define('INCLUDE_CHECK',1);
require "../include/connect.php";

if(!$_POST['img']) die("There is no such product!");

$List = explode('/',$_POST['img']);
$img = mysqli_real_escape_string($conn,end($List));
$result = mysqli_query($conn,"SELECT * FROM featured_products WHERE img='".$img."'");

$row = mysqli_fetch_array($result);


if(!$row) die("There is no such product!");

echo '<strong>'.$row['name'].'</strong>

<p class="descr">'.$row['description'].'</p>

<strong>price: $'.$row['price'].'</strong>
<small>Drag it to your shopping cart to purchase it!</small>';
?>
