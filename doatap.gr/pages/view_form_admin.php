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
    <title>ΔΟΑΤΑΠ - Οριστική Υποβολή</title>
    <style>
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent" id="gtco-main-nav">
        <div class="container">
            <a href="index_admin.html" class="navbar-brand">ΔΟΑΤΑΠ</a>
            <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse">
                <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="#"><strong></strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="aithsh_info.html"><strong>Αιτηση</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="career_admin.html"><strong>Καριερα</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="About us_admin.html"><strong>Οργανισμος</strong></a></li>
                    <li style="background-color:white" class="nav-item"><a class="nav-link" href="announcements_admin.php"><strong>Ανακοινωσεις</strong></a></li>
                    <li style="background-color:white" class="nav-item"><a class="nav-link" href="FAQ_admin.html"><strong>FAQ</strong></a></li>
                    <li style="background-color:white" class="nav-item"><a class="nav-link" href="#contact"><strong>GR</strong></a></li>
                    <li style="background-color:white" class="nav-item"><a class="nav-link" href="#contact"><strong>ENG</strong></a></li>

                </ul>
                <form method="post" action="../php/logout.php" class="form-inline my-2 my-lg-0">
                    <input style="background-color:orangered" class="btn btn-outline-dark my-2 my-sm-0 mr-3 text-uppercase" type="submit" value="ΑΠΟΣΥΝΔΕΣΗ" />
                    <a style="background-color:orange" href="forms_admin.php" class="btn btn-outline-dark my-2 my-sm-0 mr-3 text-uppercase">Προβολή αιτήσεων</a>
                </form>
            </div>
        </div>
    </nav>
        <ul style="background-color:transparent" class="breadcrumb">
        <li><a href="index_admin.html">Αρχική ></a></li>
        <li> Προβολή Αίτησης<li>
    </ul>
    <br /><br />
    <div class="box2">
        <br />
        <div class="container" , id="=login">
            <h1 style="text-align:center"><strong>Προβολή αίτησης</strong></h1>
            <br /><br /><br />
                        <div class="form-center">



                            <?php

                            session_start();
                            $id = $_SESSION['view_form_id'];
                            $date = $_SESSION['view_form_date'];
                            $fname = $_SESSION['view_form_fname'];
                            $lname = $_SESSION['view_form_lname'];
                            $degree = $_SESSION['view_form_deg'];
                            $college = $_SESSION['view_form_college'];
                            $department = $_SESSION['view_form_dep'];


                            echo"<form action='../php/deny.php' method='post'>
                                ";
                                echo"<label for='id'>Αριθμός αίτησης</label>";
                                echo"<h6 style='display:inline-block; float:left;'>$id</h6><br /><br />";

                                echo"<label for='date'>Ημερομηνία</label>";
                                echo"<h6 style='display:inline-block; float:left;'>$date</h6><br /><br />";

                                echo"<label for='fname'>Όνομα</label>";
                                echo"<h6 style='display:inline-block; float:left;'>$fname</h6><br /><br />";

                                echo"<label for='lname'>Επώνυμο</label>";
                                echo"<h6 style='display:inline-block; float:left;'>$lname</h6><br><br />";

                                echo"<label for='degree'>Είδος Πτυχίου</label>";
                                echo"<h6 style='display:inline-block; float:left;'>$degree</h6><br><br />";
                                

                                echo"<label for='college'>Πανεπιστήμιο</label>";
                                echo"<h6 style='display:inline-block; float:left;'>$college</h6><br><br />";

                                echo"<label for='department'>Τμήμα</label>";
                                echo"<h6 style='display:inline-block; float:left;'>$department</h6><br><br />";

                                ?>


                                    <label for="paravolo">Παράβολο</label>
                                    <a style="color:cyan" href="users/Paravolo.pdf" download="Paravolo.pdf">Paravolo.pdf</a><br><br>

                                    <label for="id">Αντίγραφο ταυτότητας / διαβατηρίου</label>
                                    <a style="color:cyan" href="users/Id.pdf" download="Id.pdf">Id.pdf</a><br /><br />

                                    <label for="dilwsi">Συμπληρωμένη υπεύθυνη δήλωση</label>
                                    <a style="color:cyan" href="users/Dilwsi.pdf" download="Dilwsi.pdf">Dilwsi.pdf</a><br><br><br>

                                    <label for="sugkatathesi">Έντυπο συγκατάθεσης</label>
                                    <a style="color:cyan" href="users/Sigkatathesi.pdf" download="Sigkatathesi.pdf">Sigkatathesi.pdf</a><br><br>

                                    <label for="apoluthrio">Απολυτήριο Λυκείου</label>
                                    <a style="color:cyan" href="users/Apoluthrio.pdf" download="Apoluthrio.pdf">Apoluthrio.pdf</a><br><br>

                                    <label for="ptuxio">Πτυχίο</label>
                                    <a style="color:cyan" href="users/Ptuxio.pdf" download="Ptuxio.pdf">Ptuxio.pdf</a><br><br>

                                    <label for="panep">Πιστοποιητικό Πανεπιστημίου</label>
                                    <a style="color:cyan" href="users/Panepisthmio.pdf" download="Panepisthmio.pdf">Panepisthmio.pdf</a><br><br>

                                    <label for="math">Πιστοποιητικό Μαθημάτων</label>
                                    <a style="color:cyan" href="users/Mathimata.pdf" download="Mathimata.pdf">Mathimata.pdf</a><br><br><br><br>


                                    <div class="container button">
                                            <input style="width:250px" name="deny" type="submit" value="Απόρριψη αίτησης">
                                            <input style="width:250px" name="accept" type="submit" value="Έγκριση αίτησης">
                                    </div><br><br>

                                </form>
                        <br><br></div>
        </div>
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