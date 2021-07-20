<?php
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>TSF Bank | Transaction History</title>
</head>
<body>
    <header>
        <div id="navbar">
            <h1 class="logo"><a href="index.php"><span class="text-primary"><i class="fas fa-university"></i>
                TSF</span> Bank</a></h1>
            <ul>
                <li><a href="transfermoney.php">Transfer Money</a></li>
                <li><a class="current" href="transactionhistory.php">Transaction History</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </header>

    <section class="transaction-history">
        <h1><span class="text-primary">Transaction</span> History</h1>
        <table class="table table-striped table-hover">
            <tr>
                <td>S.No</td>
                <td>Sender</td>
                <td>Receiver</td>
                <td>Amount</td>
                <td>Date & Time</td>
            </tr>
            <?php
                $sqll=" SELECT * from transactionhistory";
                $query=mysqli_query($con,$sqll);
                while($rows=mysqli_fetch_assoc($query))
                {
            ?>
            <tr>
                <td><?php echo $rows['sno']?></td>
                <td><?php echo $rows['sender']?></td>
                <td><?php echo $rows['receiver']?></td>
                <td><?php echo $rows['balance']?></td>
                <td><?php echo $rows['datetime']?></td>
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