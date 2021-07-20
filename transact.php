<?php
    include 'config.php';
    if(isset($_POST['submit']))
    {
        $from=$_GET['id'];
        $to=$_POST['to'];
        $amount=$_POST['amount'];
        $sql = "SELECT * from customers where id=$from";
        $query = mysqli_query($con,$sql);
        $sql1 = mysqli_fetch_array($query);
        $sql = "SELECT * from customers where id=$to";
        $query = mysqli_query($con,$sql);
        $sql2 = mysqli_fetch_array($query); 
        if(($amount)<0)
        {
            echo '<script type="text/javascript">';
            echo 'alert("Please enter positive values")';
            echo '</script>';
        }

        else if($amount>$sql1['balance'])
        {
            echo '<script type="text/javascript">';
            echo ' alert("Bad Luck! Insufficient Balance")';
            echo '</script>';
        }

        else if($amount==0)
        {
            echo '<script type="text/javascript">';
            echo ' alert("Oops! Zero value cannot be transferred")';
            echo '</script>';
        }
        
        else
        {       
            $newbalance = $sql1['balance'] - $amount;
            $sql = "UPDATE customers set balance=$newbalance where id=$from";
            mysqli_query($con,$sql);

            $newbalance = $sql2['balance'] + $amount;
            $sql = "UPDATE customers set balance=$newbalance where id=$to";
            mysqli_query($con,$sql);

            $sender = $sql1['f_name'];
            $receiver = $sql2['f_name'];
            $sql = "INSERT INTO transactionhistory(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
            $query=mysqli_query($con,$sql);

            echo '<script type="text/javascript">';
            echo 'alert("Money has been Transfered!")';
            echo '</script>';

            if($query)
            {
                echo "<script> alert('Transaction Successful')";
                echo "window.location='transactionhistory.php'";
                echo "</script>";
            }

            $newbalance=0;
            $amount=0;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/242c8451c5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>TSF Bank | Transfer</title>
</head>
<body>
    <header>
        <div id="navbar">
            <h1 class="logo"><a href="index.php"><span class="text-primary"><i class="fas fa-university"></i>
                TSF</span> Bank</a></h1>
            <ul>
                <li><a href="transfermoney.php">Transfer Money</a></li>
                <li><a href="transactionhistory.php">Transaction History</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </header>

    <section class="transact-info">
        <h1>Make your <span class="text-primary">Transaction</span></h1>
        <?php
            include 'config.php';
            $id=$_GET['id'];
            $sq="SELECT * from customers where id='$id'";
            $query=mysqli_query($con,$sq);
            if(!$query)
            {
                echo "Error: ".$sq."<br>".mysqli_error($con);
            }
            $data=mysqli_fetch_array($query);
        ?>
        <form method="post" name="tcredit" class="tabletext" ><br>
        <table class="table table-striped table-hover">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Account No.</td>
                <td>Balance</td>
                <td>Email ID</td>
            </tr>
            <tr>
                <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['f_name'] ?></td>
                <td><?php echo $data['accno'] ?></td>
                <td><?php echo $data['balance'] ?></td>
                <td><?php echo $data['email']?></td>
            </tr>
        </table>
        <br><br><br>
        <div class="transact-money">
            <div class="dropdown">
                <label>Send Money To: </label>
                <br>
                <select name="to" class="form-control" required>
                    <option value="" disabled selected>Choose</option>
                    <?php
                        include 'config.php';
                        $sid=$_GET['id'];
                        $sl = "SELECT * FROM customers where id!='$sid'";
                        $result=mysqli_query($con,$sl);
                        if(!$result)
                        {
                            echo "Error ".$sl."<br>".mysqli_error($con);
                        }
                        while($rows = mysqli_fetch_assoc($result)){
                    ?>
                    <option value="<?php echo $rows['id'];?>"> 
                        <?php echo $rows['f_name'] ;?> ( Balance: 
                        <?php echo $rows['balance'] ;?> )
                    </option>
                    <?php 
                        } 
                    ?>
                </select>
            </div>
            <br><br>
            <label>Enter Amount to Transfer: </label>
            <br>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
            <div class="button">
                <button class="btn" name="submit" type="submit" id="myBtn" >Confirm</button>
            </div>
        </div>
        </form>
    </section>
    <br><br>
    <footer class="footer">
        <p>TSF Bank &copy; 2021, All Rights Reserved</p>
    </footer>
</body>
</html>