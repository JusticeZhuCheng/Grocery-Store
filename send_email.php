<?php
session_start();

if(!empty($_POST['purchase'])) {
    $_SESSION["email"] = $_POST["email"];
    $pcode = $_POST['pcode'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $suburb = $_POST['suburb'];
    $address = $_POST['address'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $sum = $_SESSION["Sum"];
    $zhonglei = $_SESSION["Zhonglei"];
}
$email = $_SESSION["email"];
$subject = "Shopping Receipt";
$message = "Hello! This is a confirmation e-mail. Your order has been confirmed. \n";
$message .= "Your contact details are:";
$message .= "<table border=\"1\"><tr><td>First Name</td><td>$fname</td></tr><tr><td>Last Name</td><td>$lname</td></tr><tr><td>Address</td><td>$address</td></tr><tr><td>Suburb</td><td>$suburb</td></tr><tr><td>State</td><td>$state</td></tr><tr><td>Country</td><td>$country</tr><tr><td>Post code</td><td>$pcode</td></tr><tr><td>Email</td><td>$email</td></tr></table>";
$from = "Grocery Store";
$headers .= "MIME-Version: 1.0 \r\n";
$headers .= "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "Content-Transfer-Encoding: 8bit \r\n";
$headers .= "From: $from \r\n";
$message .= "<div>Your order details are:</div>";
$message .= "<table border=\'1\'><tr><td><b>Product name</b></td><td><b>Unit price</b></td><td><b>Unit quantity</b></td><td><b>Required quantity</b></td><td><b>Total cost</b></td></tr>";
foreach($_SESSION["gwc"] as $k){
    $message .="<tr><td>$k[4]</td><td>$k[2]</td><td>$k[5]</td><td>$k[1]</td><td>".$k[1]*$k[2]."</td></tr> \n ";
}
$message .= "<tr><td colspan = 3>Number of products</td><td align = left colspan = 2>$zhonglei</td></tr><tr><td colspan = 3>Shopping cart total</td><td align = left colspan = 2>$sum</td></tr></table>";
mail($email,$subject,$message,$headers);
echo "Mail Sent.";
?>

