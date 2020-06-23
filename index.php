<?php
    $con=mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
    $email_id= $_POST['email_id'];
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $phone= $_POST['phone'];
    $user_registeration_query="insert into users(email_id, first_name, last_name, phone) values ('$email_id','$first_name', '$last_name', '$phone')";
    $user_registration_submit= mysqli_query($con, $user_registeration_query) or die(mysqli_error($con));
    echo "User successfully inserted";
?>
