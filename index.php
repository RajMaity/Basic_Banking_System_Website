<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
            <div class="row intro py-1" style="background-color : #3399ff;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                <div class="jumbotron" style="height : 200px; padding-top:20px;">
  <h3 class="text-center pt-4" style="color : black;">Welcome To</h3>      
    <h1 class="text-center pt-4">Bank Of The Sparks Foundation!</h1>
  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
              <img src="https://bsmedia.business-standard.com/media-handler.php?mediaPath=https://bsmedia.business-standard.com/_media/bs/img/article/2018-07/18/full/1531852476-8493.jpg&width=1200" style="width: 70%;" class="img-fluid pt-2">
              </div>
            </div>
            <br><br>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="https://findicons.com/files/icons/1994/vista_style_business_and_data/256/users.png" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button type="button" class="btn btn-outline-success btn-lg">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="https://images.squarespace-cdn.com/content/v1/5fdcfd2e50df924fd25d18d3/1612817471585-WOB2LR9EU7CRMOZWW1A7/ke17ZwdGBToddI8pDm48kHhlTY0to_qtyxq77jLiHTtZw-zPPgdn4jUwVcJE1ZvWhcwhEtWJXoshNdA9f1qD7T-j82ScS_xjTqFYGqFrT72qZ_E0ELtHpOZiWcSG1QwIMeEVreGuQ8F95X5MZTW1Jw/avidapay-transaction-fee.png" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button type="button" class="btn btn-outline-success btn-lg">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/transaction-history-2697671-2237562.png" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button type="button" class="btn btn-outline-success btn-lg">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <br><br>
<marquee text-size="10px" color="blue" hspace="40%" width="20%">
   <h4>Thanks for visiting this website!!</h4>
</marquee>
<br>
<div class="container-fluid">
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <div class="me-5 d-none d-lg-block">
    </div>
  </section>
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Bank of The Sparks Foundation
          </h6>
          <p>
          “A banking system is the most important and integral part of the economy for any country.”<br>
          -Bill Gates
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
           Services
          </h6>
          <p>
            <a href="#!" class="text-reset" style="color:blue;">Login/Signup</a>
          </p>
          <p>
            <a href="#!" class="text-reset">NEFT Services</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Transaction History</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Home Loan</a>
          </p>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Partners</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Manager</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Events</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i>Bhilai, CG 495670, India</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            xyz@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
      </div>
    </div>
  </section>
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="#">Bank of The Sparks Foundation</a>
  </div>
</footer>
</div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>