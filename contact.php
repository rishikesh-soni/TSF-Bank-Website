<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/242c8451c5.js" crossorigin="anonymous"></script>
    <title>TSF Bank | Contact</title>
</head>
<body>
    <header>
        <div id="navbar">
            <h1 class="logo"><a href="index.php"><span class="text-primary"><i class="fas fa-university"></i>
                TSF</span> Bank</a></h1>
            <ul>
                <li><a href="transfermoney.php">Transfer Money</a></li>
                <li><a href="transactionhistory.php">Transaction History</a></li>
                <li><a class="current" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </header>

    <section id="contact-form">
        <div class="container">
            <h1 class="l-heading"><span class="text-primary">Contact</span> Us</h1>
            <p>Please fill out the form below to contact us</p>
            <form action="">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message"></textarea>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </section>
    
    <section id="contact-info" class="bg-dark">
        <div class="container" id="flex-container">
            <div class="box">
                <a href="#"><i class="fas fa-hotel fa-3x"></i></a>
                <h3>Location</h3>
                <p>35th Street, Main Road <br> Hyderabad India</p>
            </div>
            <div class="box">
                <a href="#"><i class="fas fa-phone fa-3x"></i></a>
                <h3>Phone</h3>
                <p>(+91) 9998887771</p>
            </div>
            <div class="box">
                <a href="#"><i class="fas fa-envelope fa-3x"></i></a>
                <h3>Email Address</h3>
                <p>frontdesk@tsfbank.co</p>
            </div>
        </div>
    </section>
    <footer class="footer">
        <p>TSF Bank &copy; 2021, All Rights Reserved</p>
    </footer>
</body>
</html>