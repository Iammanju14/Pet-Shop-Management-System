```php
<?php
    session_start();

    if (!isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Petshop Online Website</title>

    <!-- Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">

            <div class="navbar-header">
                <button type="button"
                        class="navbar-toggle"
                        data-toggle="collapse"
                        data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="index.php">
                    <h4 class="wow fadeInDown"
                        style="margin-top:20px; color:Pink;">
                        Petshop Online Website
                    </h4>
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-home"></i> Home
                        </a>
                    </li>
                    <li>
                        <a href="about-us.php">About Us</a>
                    </li>
                    <li>
                        <a href="available.php">Available Products</a>
                    </li>
                    <li class="active">
                        <a href="contacts.php">Contacts</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- Contact Information -->
    <br><br>

    <div class="container">
        <section id="contact-info">

            <center>
                <span style="font-size:35px; font-weight:bold;
                             font-family:verdana; color:blue;">
                    How to Reach Us?
                </span>
            </center>

            <div class="left wow fadeInDown">

                <div class="col-md-6">
                    <img src="images/logo.jpg"
                         class="img-responsive pull-right"
                         alt="Pet Shop Logo">
                </div>

                <div class="col-md-6">
                    <p class="lead">
                        <br>

                        <p>
                            <span style="font-size:20px; font-weight:bold;
                                         font-family:verdana; color:red;">
                                Pet Shop Management Team
                            </span>
                            <br>
                            <b>Address:</b> Your Address Here
                            <br>
                            <b>Tel/Phone:</b> Contact Number
                            <br>
                            <b>Email Address:</b> contact@example.com
                        </p>

                        <hr>

                        <span style="font-size:20px; font-weight:bold;
                                     font-family:verdana; color:Violet;">
                            We are open
                        </span>

                        <p>
                            <b>MONDAY TO FRIDAY -- 8:00AM - 5:00PM</b>
                        </p>
                    </p>

                    <hr>

                    <table style="width:80px;">
                        <tr>
                            <td>
                                <a href="https://www.facebook.com">
                                    <img data-toggle="tooltip"
                                         src="images/ico/Facebook.png"
                                         class="img-responsive"
                                         alt="Facebook">
                                </a>
                            </td>
                            <td>
                                <a href="https://www.instagram.com">
                                    <img src="images/ico/icons_Instagram.png"
                                         class="img-responsive"
                                         alt="Instagram">
                                </a>
                            </td>
                            <td>
                                <a href="https://www.twitter.com">
                                    <img src="images/ico/Twitter.png"
                                         class="img-responsive"
                                         alt="Twitter">
                                </a>
                            </td>
                            <td>
                                <a href="https://www.youtube.com">
                                    <img src="images/ico/YouTube.png"
                                         class="img-responsive"
                                         alt="YouTube">
                                </a>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>

        </section>
    </div>

    <br><br>

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>

    <?php include('loginModal.php'); ?>

    <!-- JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>

</body>
</html>

<?php
    } else if (isset($_SESSION['username'])) {
        include('includes/admin.php');
    }
?>
```