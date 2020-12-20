<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <br>
                  <h3 style="font-size: 50px;">Welcome to</h3>
                  <h1 style="font-size: 80px;color:blue;font-family:Comic Sans MS;">Spark Bank</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="https://3k64nh47gxyj39ud4k2tc04b-wpengine.netdna-ssl.com/wp-content/uploads/2019/10/Digital-bank-800x500.png"  width="40%" class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  
                  <div class="col-md act">
                    <img src="https://nbbonline.com/sites/default/files/2019-12/OnlineBanking-HP-01.png" width="68%;"  class="img-fluid">
                    <br><br>
                    <a href="transfermoney.php"><button class="btn btn-outline-primary">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="https://img.freepik.com/free-vector/atm-payments-people-multi-color-illustration-theme-atm-payments-withdrawal-other-transactions-finance-business-small-people_139630-189.jpg?size=626&ext=jpg&ga=GA1.2.247983009.1599523200" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button class="btn btn-outline-primary">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2020. Made by <a href="https://kishoredurai.github.io/kishoredurai/index.html"><b>KISHORE D</b></a> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>