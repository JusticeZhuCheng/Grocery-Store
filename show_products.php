<html>
<head>
    <title>show products</title>


    <style>


        table  {
            background: #99f;
            color:#fff;
            text-align:left;
            font-size:12px;
            border-spacing: 4px;
        }
        table a, table, tbody, tfoot, tr, th, td {
            font-family: Verdana, arial, helvetica, sans-serif;
        }
        table, {
            border-left:3px solid #567;
            border-right:3px solid #000;
            padding: 3px;
        }
        table a {
            text-decoration: none;
            background: inherit;
            color: #ccf;
            font-weight: bold;
        }
        table a:link {
            text-decoration: none;
        }
        table a:visited {
            background: inherit;
            color: #66c;
            text-decoration: line-through;
        }
        table a:hover {
            background: inherit;
            color: #eef;
            position: relative;
            top: 1px;
            left: 1px;
            text-decoration: none;
        }
        table caption {
            border-top:1px solid #ddf;
            border-left:1px solid #ddf;
            border-right:1px solid #669;
            border-bottom:1px solid #669;
            text-align: left;
            padding: 3px;
            color: #ccf;
            background: #99f;
            font-family: georgia, "times new roman", serif;
            font-size:20px;
            font-weight:bold;
        }
        table, td, th {
            margin:0px;
            padding:3px;
            border-left:1px solid #ddf;
            border-right:1px solid #669;
            border-bottom:1px solid #669;
        }
        td, th {
            border-top:1px solid #ddf;
            border-left:1px solid #ddf;
            border-right:1px solid #669;
            border-bottom:1px solid #669;
        }
        tr.odd {
            color: inherit;
            background: #88e;
        }
        ht:bold;
        color:#592C16;
        padding: 16px 9px;

        }


    </style>
    <script type="text/javascript">
        function check_quatity(quantity)
        {
            qua_num=document.quantityform.quantity.value;
            if (qua_num == "" || qua_num == 0)
            {
                window.alert("Please enter the required quantity");
                return false;

            }
            if (qua_num > quantity)
            {
                window.alert("The required quantity is unavaliable");
                return false;

            }
            if (isNaN(qua_num))
            {
                window.alert("Please enter a valid quantity");
                return false;

            }

            return true;
        }
    </script>

</head>

<body>

<center>
    <div align="center">Product Details</div>
<?php
session_start();
echo "<table width=90%>";
echo "<tr><td>Product id</td>";
echo"<td>Product name</td>";
echo"<td>Unit price</td>";
echo"<td>Unit quantity</td>";
echo"<td>In stock</td>";
echo"<td>Quantity</td>";
echo"</tr>";

$servername = "rerun.it.uts.edu.au";
$username = "potiro";
$password = "pcXZb(kL";
$dbname = "poti";
$product_id = $_GET[product_id];
try {
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("连接失败: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM products where product_id=$product_id";

    // 设置结果集为关联数组'c
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $product_name = $row["product_name"];
    $unit_price = $row["unit_price"];
    $unit_quantity = $row["unit_quantity"];
    $in_stock = $row["in_stock"];
    $_SESSION["product_name"] = $row["product_name"];
    $_SESSION["unit_price"] = $row["unit_price"];
    $_SESSION["unit_quantity"] = $row["unit_quantity"];
    $_SESSION["in_stock"] = $row["in_stock"];
    $_SESSION["product_id"] = $product_id;

    echo "<tr><td>$product_id</td>";
    echo"<td>$product_name</td>";
    echo"<td>$unit_price</td>";
    echo"<td>$unit_quantity</td>";
    echo"<td>$in_stock</td>";
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
<td align="center">
    <form action="add.php" method="post" name="quantityform" target="bottom_right" onsubmit="return check_quatity(<?php echo $row["in_stock"]; ?>)">
        <input name="quantity" type="text" size="3" >
        <input type="submit" name="add" value="add" >
    </form>
</td></tr>
</table>
</center>
</body>
</html>