<?php
    $con = mysqli_connect("localhost", "root", "", "gripinternship") or die(mysqli_error($con));
    $name = $_POST['name'];
    $balance = $_POST['balance'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $newacc = "INSERT INTO customers (f_name, gender, phone, dob, email, balance) VALUES ('$name', '$gender', '$phone', '$dob', '$email', '$balance')"; 
    $na = mysqli_query($con, $newacc);
    if($na)
    {
        echo '<script type="text/javascript">';
        echo 'alert("New Account Added!! ")';
        echo '</script>';
    }
    else
    {
        echo '<script type="text/javascript">';
        echo 'alert("No account was added!! ")';
        echo '</script>';
    }

    header('location: transfermoney.php');
?>
