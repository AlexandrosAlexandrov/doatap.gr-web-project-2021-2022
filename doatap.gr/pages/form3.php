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
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent" id="gtco-main-nav">
        <div class="container">
            <a href="index_signed_in.html" class="navbar-brand">ΔΟΑΤΑΠ</a>
            <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse">
                <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="#"><strong></strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="aithsh_info.html"><strong>Αιτηση</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="career_signed_in.html"><strong>Καριερα</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="About us_signed_in.html"><strong>Οργανισμος</strong></a></li>
                    <li style="background-color:white" class="nav-item"><a class="nav-link" href="announcements_signed_in.php"><strong>Ανακοινωσεις</strong></a></li>
                    <li style="background-color:white" class="nav-item"><a class="nav-link" href="FAQ_signed_in.html"><strong>FAQ</strong></a></li>
                    <li style="background-color:white" class="nav-item"><a class="nav-link" href="#contact"><strong>GR</strong></a></li>
                    <li style="background-color:white" class="nav-item"><a class="nav-link" href="#contact"><strong>ENG</strong></a></li>

                </ul>
                <form method="post" action="../php/logout.php" class="form-inline my-2 my-lg-0">
                    <a style="background-color:lightseagreen" href="profile.php" class="btn btn-outline-dark my-2 my-sm-0 mr-3 text-uppercase" id="loginButton">Το προφιλ μου</a>
                    <input style="background-color:orangered" class="btn btn-outline-dark my-2 my-sm-0 mr-3 text-uppercase" type="submit" value="ΑΠΟΣΥΝΔΕΣΗ" />
                    <a style="background-color:mediumpurple" href="form.php" class="btn btn-outline-dark my-2 my-sm-0 mr-3 text-uppercase">Κανε την αιτηση</a>
                </form>
            </div>
        </div>
    </nav>
        <ul style="background-color:transparent" class="breadcrumb">
        <li><a href="index_signed_in.html">Αρχική ></a></li>
        <li> Αίτηση</li>
    </ul>
    <br /><br />

    <div class="container button">
        <a style="float:right; width:400px" href="#">Προβολή αποθηκευμένων αιτήσεων</a>
    </div><br /><br /><br />
    <div class="box2">
        <br />
        <div class="container" , id="=login">
            <h1 style="text-align:center"><strong>Τελική κατάσταση της αίτησης</strong></h1>
            <h5 style="text-align:center">Παρακαλώ βεβαιωθείτε οτι όλα είναι σωστά</h5>
            <br /><br /><br />
            <div class="form-center">
                <?php

                        // Server name must be localhost
                        $servername = "localhost";
  
                        // In my case, user name will be root
                        $username = "root";
  
                         // Password is empty
                        $password = "";

                        $database = "sdi1500046";
  
                        // Creating a connection
                         $conn = new mysqli($servername, 
                         $username, $password, $database);
  
                        // Check connection
                        if ($conn->connect_error) {
                        die("Connection failure: " 
                         . $conn->connect_error);}

                session_start();
                $fname = $_SESSION['fname'];
                $lname = $_SESSION['lname'];
                $degree = $_SESSION['degree'];
                $college = $_SESSION['college'];
                $department = $_SESSION['department'];


                echo"<form method='post' action='../php/DBform3.php'>";
                    echo"<label for='fname'>Όνομα</label>";
                    echo"<input type='text' id='fname' name='fname' value='$fname'><br><br />";
                
                    echo"<label for='lname'>Επώνυμο</label>";
                    echo"<input type='text' id='lname' name='lname' value='$lname'><br><br />";

                    echo"<label for='degree'>Είδος Πτυχίου</label>";
                    echo"<select name='degree' id='degree'>";
                        echo"<option value='$degree'>$degree</option>";
                        echo"<option value='BSc'>Bsc</option>";
                        echo"<option value='Msc'>Msc</option>";
                        echo"<option value='PhD'>PhD</option>";
                    echo"</select><br /><br />";

                        $sql = "SELECT * FROM institutes";
                        $result = $conn->query($sql);

                        echo"<label for='college'>Πανεπιστήμιο</label>";
                        echo"<select name='college' id='college'>";
                        echo"<option value='$college'>$college</option>";
                        while($row = $result->fetch_assoc()){
                            echo"<option value='" . $row["name"] . "'>" . $row["name"] . "</option>";
                        }
                        echo"</select><br><br>";

                        $sql2 = "SELECT * FROM departments";
                        $res = $conn->query($sql2);

                    echo"<label for='department'>Τμήμα</label>";
                    echo"<select name='department' id='department'>";
                        echo"<option value='$department'>$department</option>";
                        while($row = $res->fetch_assoc()){
                            echo"<option value='" . $row["name"] . "'>" . $row["name"] . "</option>";
                        }
                        echo"</select><br><br>";
                    ?>

                    <a style="color:cyan" href="users/Paravolo.pdf" download="Paravolo.pdf">Paravolo.pdf</a>
                    <label for="paravolo">Παράβολο</label>
                    <input type="file" id="paravolo" name="paravolo"><br><br /><br />

                    <a style="color:cyan" href="users/Id.pdf" download="Id.pdf">Id.pdf</a>
                    <label for="id">Αντίγραφο ταυτότητας / διαβατηρίου</label>
                    <input type="file" id="id" name="id"><br><br /><br />

                    <a style="color:cyan" href="users/Dilwsi.pdf" download="Dilwsi.pdf">Dilwsi.pdf</a>
                    <label for="dilwsi">Συμπληρωμένη υπεύθυνη δήλωση</label>
                    <input type="file" id="dilwsi" name="dilwsi"><br><br /><br />

                    <a style="color:cyan" href="users/Sigkatathesi.pdf" download="Sigkatathesi.pdf">Sigkatathesi.pdf</a>
                    <label for="sugkatathesi">Έντυπο συγκατάθεσης</label>
                    <input type="file" id="sugkatathesi" name="sugkatathesi"><br><br /><br />

                    <a style="color:cyan" href="users/Apoluthrio.pdf" download="Apoluthrio.pdf">Apoluthrio.pdf</a>
                    <label for="apoluthrio">Απολυτήριο Λυκείου</label>
                    <input type="file" id="apoluthrio" name="apoluthrio"><br><br /><br />

                    <a style="color:cyan" href="users/Ptuxio.pdf" download="Ptuxio.pdf">Ptuxio.pdf</a>
                    <label for="ptuxio">Πτυχίο</label>
                    <input type="file" id="ptuxio" name="ptuxio"><br><br /><br />

                    <a style="color:cyan" href="users/Panepisthmio.pdf" download="Panepisthmio.pdf">Panepisthmio.pdf</a>
                    <label for="panep">Πιστοποιητικό Πανεπιστημίου</label>
                    <input type="file" id="panep" name="panep"><br><br /><br />

                    <a style="color:cyan" href="users/Mathimata.pdf" download="Mathimata.pdf">Mathimata.pdf</a>
                    <label for="math">Πιστοποιητικό Μαθημάτων</label>
                    <input type="file" id="math" name="math"><br><br /><br /><br />

                    <div class="container button">
                        <a style="width:250px" href="#">Αποθήκευση αίτησης</a>
                        <input type="submit" value="Επόμενο"><br /><br /><br />
                    </div>

                </form>
            </div>
        </div>
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