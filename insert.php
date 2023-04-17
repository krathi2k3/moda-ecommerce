<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Order</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="assests/css/cartstyle.css">
  <link rel="shortcut icon" href="assests/imgs/favicon.ico" type="image/x-icon">
</head>

<body>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $address=$_POST['add'];
    $email =$_POST['eml'];
    $phone = $_POST['pho'];
    $or= $_POST['message'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'myorder';
    
    
    $conn = mysqli_connect($host, $user, $pass, $dbname);

    $sql = "INSERT INTO orders(namee,addresss,emaill,contactno,orderdet) values ('$name', '$address', '$email', '$phone', '$or')";
    mysqli_query($conn, $sql);

}
?>
  
  <!--MAIN-->
  <div class="container">
    <h1 class="brand"><span>Fill</span> in your details to place the order</h1>
    <div class="wrapper">
      <div class="company-info">
       
       
      </div>
      <div class="contact">
        <h3>Details</h3>
        <div class="alert">Your order has been taken</div>
        <form  method="post" action="#">
          <p>
            <label>Name</label>
            <input type="text" name="name"  required>
          </p>
          <p>
            <label>Address</label>
            <input type="text" name="add" >
          </p>
          <p>
            <label>Email </label>
            <input type="email" name="eml"  required>
          </p>
          <p>
            <label>Phone Number</label>
            <input type="text" name="pho" >
          </p>
          <p class="full">
            <label>Order</label>
            <textarea name="message" ></textarea>
          </p>
          <input type="submit" name="submit" value="Place Order">
        </form>
      </div>
    </div>
  </div>
</body>
</html>