<!doctype html>
<!--
    Solution by GetTemplates.co
    URL: https://gettemplates.co
-->
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- awesone fonts css-->
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- owl carousel css-->
    <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>ΔΟΑΤΑΠ - Τελική Κατάσταση</title>
    <style>
    </style>
</head>
<?php
	session_start();
	?>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent" id="gtco-main-nav">
        <div class="container">
            <a href="index.html" class="navbar-brand">ΔΟΑΤΑΠ</a>
            <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse">
                <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="#"><strong></strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="aithsh_info.html"><strong>Αιτηση</strong></a></li>
                     <li class="nav-item"><a class="nav-link" href="career_signed_in.html"><strong>Καριερα</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="About us.html"><strong>Οργανισμος</strong></a></li>
                    <li style="background-color:white" class="nav-item"><a class="nav-link" href="announcements.php"><strong>Ανακοινωσεις</strong></a></li>
                    <li style="background-color:white" class="nav-item"><a class="nav-link" href="FAQ.html"><strong>FAQ</strong></a></li>
                    <li style="background-color:white" class="nav-item"><a class="nav-link" href="#contact"><strong>GR</strong></a></li>
                    <li style="background-color:white" class="nav-item"><a class="nav-link" href="#contact"><strong>ENG</strong></a></li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a href="login.php" class="btn btn-outline-dark my-2 my-sm-0 mr-3 text-uppercase">login</a> <a href="sign-up.html"
                                                                                                                    class="btn btn-info my-2 my-sm-0 text-uppercase">
                        sign
                        up
                    </a>
                </form>
            </div>
        </div>
    </nav>
        <ul style="background-color:transparent" class="breadcrumb">
        <li><a href="index_signed_in.html">Αρχική ></a></li>
        <li> Επεξεργασία Προφίλ</li>
    </ul>
    <br /><br />

    <div class="box2">
        <br />
        <div class="container button" , id="=login">
            <h1 style="text-align:center"><strong>Επεξεργασία Προφίλ</strong></h1>
            <br /><br /><br />
            <div class="form-center">
                <form name="form" action="../php/update_profile.php" method="post" onsubmit="return validateForm()">
                    <label for="fname">Όνομα</label> &nbsp; &nbsp;	<i> <?php echo $_SESSION['fname']; ?> </i>
                    <input type="text" id="fname" name="fname"><br><br />

                    <label for="lname">Επώνυμο</label> &nbsp; &nbsp;	<i> <?php echo $_SESSION['lname']; ?> </i>
                    <input type="text" id="lname" name="lname"><br><br />

                    <label for="email">Email</label>	&nbsp; &nbsp;	<i> <?php echo $_SESSION['email']; ?> </i>
                    <input type="text" id="email" name="email"><br><br />

					<label for="password">Password</label>
                    <input type="text" id="password" name="password"><br><br />

                    <label for="DOB">Ημερομηνία γέννησης</label>
					<input type="date" id="DOB" name="DOB" /><br /><br />
					
					<label for="phone">Τηλέφωνο (Προαιρετικό)</label>
					<input type="tel" id="phone" name="phone" /><br /><br /><br /><br /><br />

                    <br /><br /><br />
       
					<input type="submit" value="Αποθήκευση" />
                    <div>
                        <a style="width:250px" href="#">Ακύρωση</a>
                    </div>

                </form>
            </div>
        </div>-
        <br><br>
    </div>
    <br /><br /><br /><br />
    <div style="background-color: #01aaf8" class="footer" id="footer">
        <br /><br />
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h6><strong>Aθήνα</strong></h6><br />
                    <h6>Δευτέρα εως Πέμπτη 9:00-12:00</h6>
                    <h6>Αγ. Κωνσταντίνου 54, Τ.Κ. 104 37</h6>
                    <h6>210 5281000</h6>
                    <h6>information_dep@doatap.gr</h6>
                </div>
                <div class="col-md-5">
                    <h6><strong>Θεσσαλονίκη</strong></h6><br />
                    <h6>Δευτέρα εως Πέμπτη 9:00-12:00</h6>
                    <h6>Υπουργείο Μακεδονίας Θράκης – Διοικητήριο, Τ.Κ. 541 23</h6>
                    <h6>2313 501372 , 2313 501106 , 2313 501315</h6>
                    <h6>information_dep@doatap.gr</h6>
                </div>
                <div class="col-md-3">
                    <h6><strong>Χρήσιμοι σύνδεσμοι</strong></h6>
                    <img src="images/diaugeia.jpg" alt="" width="160" height="80" /><br /><br />
                    <img src="images/eric.png" alt="" width="160" height="80" /><br /><br />
                </div>
            </div>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- owl carousel js-->
        <script src="owl-carousel/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
</body>
</html>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

</body>
</html>