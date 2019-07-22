<html>
<body>
<?php
session_start();
$sum = $_SESSION["Sum"];
$zhonglei = $_SESSION["Zhonglei"];

echo "<div>Your order details are:</div>";
echo "<table border=\'1\'><tr><td><b>Product name</b></td><td><b>Unit price</b></td><td><b>Unit quantity</b></td><td><b>Required quantity</b></td><td><b>Total cost</b></td></tr>";
    foreach($_SESSION["gwc"] as $k){
    echo "<tr><td>$k[4]</td><td>$k[2]</td><td>$k[5]</td><td>$k[1]</td><td>".$k[1]*$k[2]."</td></tr>";
    }
    echo "<tr><td colspan = 3>Number of products</td><td align = left colspan = 2>$zhonglei</td></tr><tr><td colspan = 3>Shopping cart total</td><td align = left colspan = 2>$sum</td></tr></table>";
?>
</body>
</html>
