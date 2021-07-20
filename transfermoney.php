<?php
    include 'config.php';
    $select_query = "SELECT id, f_name, accno, balance, gender, dob, email, phone FROM customers";
    $result = $con->query($select_query);
    $con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/242c8451c5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>TSF Bank | Transfer Money</title>
</head>
<body>
    <header>
        <div id="navbar">
            <h1 class="logo"><a href="index.php"><span class="text-primary"><i class="fas fa-university"></i>
                TSF</span> Bank</a></h1>
            <ul>
                <li><a class="current" href="transfermoney.php">Transfer Money</a></li>
                <li><a href="transactionhistory.php">Transaction History</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </header>

    <section class="transfermoney-info">
        <h1><span class="text-primary">Transfer</span> Money</h1>
        <table class="table table-striped table-hover"> 
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Account No.</td>
                <td>Balance</td>
                <td>Gender</td>
                <td>Date of Birth</td>
                <td>E Mail ID</td>
                <td>Phone No.</td>
                <td>Operation</td>
            </tr>

            <?php
                while ($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['f_name'];?></td>
                <td><?php echo $rows['accno'];?></td>
                <td><?php echo $rows['balance'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><?php echo $rows['dob'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['phone'];?></td>
                <td><a class="btn" href="transact.php?id= <?php echo $rows['id']; ?>">Transfer</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
    <footer class="footer">
        <p>TSF Bank &copy; 2021, All Rights Reserved</p>
    </footer>
</body>
</html>

