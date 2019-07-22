
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- Designed by Jinson Zhang -->
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Shopping cart</title>

    <script language="javascript">
        function checkout(ToCheckIt)
        {
            if (ToCheckIt == 0  || !(ToCheckIt))
            {
                window.alert("Your shopping cart is empty, please select something!");

                return false;

            }
            else
            {
                parent.document.getElementById("left").src="new_left.html";
                window.open ('detail.php');
                return true;

            }
        }


    </script>

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

</head>

<body>
<center>
    <div align="center">Shopping Cart</div>
    <form action="http://www-student.it.uts.edu.au/~chezhu/add.php"  method="post" target="bottom_right" >
        <table width=90%><tr><td><b>Product name</b></td><td><b>Unit price</b></td><td><b>Unit quantity</b></td><td><b>Required quantity</b></td><td><b>Total cost</b></td></tr>
                <?php
                    session_start();
                    $ids = $_SESSION["product_id"];
                    if(!empty($_POST['add'])){
                        $quantity = $_POST['quantity'];}
                    $unit_price = $_SESSION["unit_price"];
                    $product_name = $_SESSION["product_name"];
                    $unit_quantity = $_SESSION["unit_quantity"];
                    $totalcost = 0;
                    $isempty = 0;

                    if(empty($_SESSION["gwc"]) && !empty($_POST['add']))
                    {
                     $arr = array(
                     array($ids,$quantity,$unit_price,$totalcost,$product_name,$unit_quantity)
                     );
                     $_SESSION["gwc"]=$arr;
                    }
                    else if(!empty($_SESSION["gwc"]))
                    {
                     $arr = $_SESSION["gwc"];
                     $chuxian = false;
                     foreach($arr as $v)
                     {
                     if($v[0]==$ids)
                     {
                      $chuxian = true;
                     }
                     }
                     if($chuxian)
                     {
                     for($i=0;$i<count($arr);$i++)
                     {
                      if($arr[$i][0]==$ids)
                      {
                      $arr[$i][1]+=$quantity;
                      }
                     }
                     $_SESSION["gwc"] = $arr;
                     }
                     else
                     {
                     $asg = array($ids,$quantity,$unit_price,$totalcost,$product_name,$unit_quantity);
                     $arr[] = $asg;
                     $_SESSION["gwc"] = $arr;
                     }
                    }

                    if(!empty($_POST['clear'])){
                        $_SESSION["gwc"]=array();}


                    $ann=array();
                    if(!empty($_SESSION["gwc"]))
                    {
                        $ann=$_SESSION["gwc"];
                        $isempty = 1;
                    }
                    $zhonglei = 0;
                    $sum=0;
                    foreach($ann as $k){
                        $k[3] = $k[1]*$k[2];
                        $sum = $sum + $k[1]*$k[2];
                        $zhonglei = $zhonglei += $k[1];
                        echo "<tr><td>$k[4]</td><td>$k[2]</td><td>$k[5]</td><td>$k[1]</td><td>$k[3]</td></tr>";
                    }

                echo "<tr><td colspan = 3>Number of products</td><td align = left colspan = 2>$zhonglei</td></tr><tr><td colspan = 3>Shopping cart total</td><td align = left colspan = 2>$sum</td></tr></table>";
                    $_SESSION["Sum"] = $sum;
                    $_SESSION["Zhonglei"] = $zhonglei;
                    ?>
        <table style="background-color: transparent; border-spacing: 0; padding: 0; " border="0"><tr>
                <td><input type="submit" name="clear" value="Clear" onClick="{if(confirm('Do you want to clear your shopping cart?')) {return true;} return false;}"></td>
    </form>
    <td><form action="checkout.php"  method="post" target="top_right" >
            <input type="submit" name="submit" value="Checkout" onClick="return checkout(<?php echo $isempty; ?>)">
        </form>
    </td></tr>
</center>
</body>
</html> 