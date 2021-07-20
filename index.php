<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/242c8451c5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>TSF Bank | Home</title>
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
    
    <section>
        <div id="showcase">
            <div id="content">
                <h2><span class="text-primary">Money Transfer</span> got EASY!!</h2>
                <p>Welcome To TSF Bank</p>
                <div class="btn">
                    <a href="transfermoney.php">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <section class="container content">
        <h1>The Sparks Foundation</h1>
        <h2>JULY GRIP, 2021</h3>
        <h3>Task 1</h1>
        <p>Basic Banking System</p>
        <ul>
            <li>Create a simple dynamic website which has the following specs.</li>
            <li>Start with creating a dummy data in database for upto 10
                customers. Database options: Mysql, Mongo, Postgres, etc.
                Customers table will have basic fields such as name, email,
                current balance etc. Transfers table will record all transfers
                happened.</li>
            <li>Flow: Home Page > View all Customers > Select and View one
                Customer > Transfer Money > Select customer to transfer to >
                View all Customers .</li>  
            <li>No Login Page. No User Creation. Only transfer of money
                between multiple users.</li>
            <li>Host the website at 000webhost, github.io, heroku app or any
                other free hosting provider. Check in code in gitlab.</li>
        </ul>
    </section>

    <footer class="footer">
        <p>TSF Bank &copy; 2021, All Rights Reserved</p>
    </footer>
</body>
</html>