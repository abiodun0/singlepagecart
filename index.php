<?php

define('INCLUDE_CHECK',1);
require "include/connect.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LULU Online Shopping | Featured Product</title>

<link rel="stylesheet" type="text/css" href="css/style.css" />

<!--[if lt IE 7]>
<style type="text/css">
	.pngfix { behavior: url(pngfix/iepngfix.htc);}
    .tooltip{width:200px;};
</style>
<![endif]-->


<script type="text/javascript" src="script/jquery.min.js"></script>
<script type="text/javascript" src="script/jquery-ui.min.js"></script>

<script type="text/javascript" src="script/jquery.simpletip-1.3.1.pack.js"></script>


<script type="text/javascript" src="script/script.js"></script>

</head>

<body>

<div id="main-container">

	<div class="luluzone">
    <h1>LULU Shopping </h1>
    <h3>Featured Products</h3>
    </div>
 <div class="container">
    
        <span class="top-label">
            <span class="label-txt">Shopping Cart</span>
        </span>
        
        <div class="content-area">
    
            <div class="content drop-here">
                <div id="cart-icon">
                    <img src="img/Shoppingcart_128x128.png" alt="shopping cart" class="pngfix" width="128" height="128" />
                    <img src="img/ajax_load_2.gif" alt="loading.." id="ajax-loader" width="16" height="16" />
                </div>

                <form name="checkoutForm" method="post" action="include/order.php">
                
                <div id="item-list">

                </div>
                
                </form>                
                <div class="clear"></div>

                <div id="total"></div>

                <div class="clear"></div>
                
                <a href="" onclick="document.forms.checkoutForm.submit(); return false;" class="button">Checkout</a>
                
          </div>

        </div>
        
        <div class="bottom-container-border">
        </div>
   <div class="clear"></div>
    <div class="container">
    
    	<span class="top-label">
            <span class="label-txt">Featured Products</span>
        </span>
        
        <div class="content-area">
    
    		<div class="content drag-desired">
            	
                <?php

				$result = mysqli_query($conn,"SELECT * FROM featured_products");
				while($row=mysqli_fetch_assoc($result))
				{
					echo '<div class="product"><img src="img/products/'.$row['img'].'" alt="'.htmlspecialchars($row['name']).'" width="128" height="128" class="pngfix" /></div>';
				}

				?>
                
                
       	        <div class="clear"></div>
            </div>

        </div>
        
        <div class="bottom-container-border">
        </div>

    </div>



   
    </div>

	<div class="info">	
    This is a LULU shopping cart micro site. Designed by <a href="http://www.golden0.com">golden0</a></div>

</div>

</body>
</html>
