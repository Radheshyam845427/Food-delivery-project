<?php
$con = mysqli_connect("localhost", "root", "");

mysqli_select_db($con, "payment");

// if($con) {
//     echo "Connection successful";
// }else{
//     // echo "No connection";
//     die("No connection". mysqli_connect_error());
// }

// if(isset($_POST['detail'])) {
@$name = $_POST['name'];
@$phone = $_POST['phone'];
@$address = $_POST['address'];
@$pincode = $_POST['pincode'];
@$card = $_POST['card'];
@$number = $_POST['number'];
@$date = $_POST['date'];
@$cvv = $_POST['cvv'];

$insertquery = " insert into detail(name,phone,address,pincode,card,number,date,cvv)
values ('$name','$phone','$address','$pincode','$card','$number','$date','$cvv')";

mysqli_query($con,$insertquery);

// if($query){
//     ?>

<!--     <script>
//         alert("Connection successfull")
//     </script>
//     <?php
// }else{
//     ?>
//     <script>
//         alert("No connection successfull")
//     </script>
//     <?php
// }
?>
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="pay.css">
</head>
<body>
    <div class="container">
    <form method="post"> <!-- action="delivery.php" -->
    <h1 class="main_heading">Welcome to Our Services</h1>
    <hr>
    <h2>Order Information</h2>
    <p>Name: * <input type="text" name="name" id="name" required></p>
    <p>Phone Number: * <input type="text" name="phone" id="phone number" required></p>
    <p>Address: <textarea name="address" id="address" cols="100" rows="8"></textarea></p>
    <p>Pin Code: * <input type="number" name="pincode" id="pincode" required></p>
    <h2>Payment Information</h2>

    <p>
        Card Type: 
        <img src="visa.png" height="30" width="30">
        <img src="rupay.jpg" height="30" width="30">
        <img src="mastercard.png" height="30" width="30">
        <select name="card" id="card">
        <option value="">--Select a Card Type--</option>
        <option value="visa">Visa</option>
        <option value="rupay">RuPay</option>
        <option value="mastercard">MasteCard</option>
        <!-- <option value=""><a href="C:\xampp\htdocs\Web Development Project\payscript.php">Pay Now</a></option> -->
        
    </select>
    </p>
    <p>
        Card Number * <input type="number" name="number" id="numbmer" required>
    </p>
    <p>
        Expiration Date: * <input type="date" name="date" id="date" required>
    </p>
    <p>CVV * <input type="password" name="cvv" id="cvv" required></p>
    <input type="submit" value="Pay Now">
</form>
</div>
</body>
</html>
