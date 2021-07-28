<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/242c8451c5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>TSF Bank | New Account</title>
</head>
<body>
    <header>
        <div id="navbar">
            <h1 class="logo"><a href="index.php"><span class="text-primary"><i class="fas fa-university"></i>
                TSF</span> Bank</a></h1>
            <ul>
                <li><a class="current" href="adduser.php">New Account</a></li>
                <li><a href="transfermoney.php">Transfer Money</a></li>
                <li><a href="transactionhistory.php">Transaction History</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </header>

    <section class="adduser-info">
      <h1><span class="text-primary">New</span> Account</h1>
      <form class="row g-3" action="newacc.php" method="post">
          <div class="col-md-4">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" required>
          </div>
          <div class="col-md-3">
            <label for="gender" class="form-label">Gender</label>
            <select id="gender" name="gender" class="form-select">
              <option selected>Choose...</option>
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="phone" class="form-label">Phone No.</label>
            <input type="text" class="form-control" name="phone" id="phone" required>
          </div>
          <div class="col-md-2">
            <label for="dob" class="form-label">Date-of-Birth</label>
            <input type="date" class="form-control" name="dob" id="dob" required>
          </div>
          <div class="col-md-7">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email">
          </div>
          <div class="col-md-4">
            <label for="balance" class="form-label">Balance</label>
            <input type="text" class="form-control" name="balance" id="balance" required>
          </div>
          <div class="col-12">
            <input type="submit" class="btn">
            <input type="reset" class="btn">
          </div>
        </form>
    </section>
    
    <footer class="footer">
        <p>TSF Bank &copy; 2021, All Rights Reserved</p>
    </footer>
</body>
</html>