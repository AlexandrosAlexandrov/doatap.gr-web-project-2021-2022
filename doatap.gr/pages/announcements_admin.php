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
    <title>ΔΟΑΤΑΠ - Ανακοινώσεις</title>
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
        <li> Ανακοινώσεις</li>
    </ul>
    <br /><br />
    <div style="text-align:center">
        <h1><strong>Ανακοινώσεις</strong></h1>
    </div><br /><br /><br />
    <div class="form-center">
    <form>
        <label for="categories">Επιλέξτε κατηγορία</label>
        <select name="categories" id="categories">
            <option value="-- Επιλέξτε --">-- Επιλέξτε --</option>
            <option value="Γενικά">Γενικά</option>
            <option value="Προϋπολογισμός">Προϋπολογισμός</option>
            <option value="Εκπαίδευση">Εκπαίδευση</option>
            <option value="Επιστήμες Υγείας">Επιστήμες Υγείας</option>
            <option value="Θετικές Επιστήμες">Θετικές Επιστήμες</option>
            <option value="Θεωρητικές Επιστήμες">Θεωρητικές Επιστήμες</option>
        </select>
    </form><br /><br /><br />
    </div>
    <div class="table">
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
            . $conn->connect_error);
            }

            $sql = "SELECT * FROM announcements";
            $result = $conn->query($sql);

            if($result->num_rows>0){
            echo"<form method='post' action='../php/ann.php'>";
            echo"<table>";
            echo"<tr><th>Αριθμός ανακοίνωσης</th><th>Τίτλος</th><th>Ημερομηνία</th><th>κατηγορία</th>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td> <input type='Submit' name='annid' value='" . $row["id"]. "'/> </td><td>" . $row["title"] . "</td><td>" . $row["date"] . "</td><td>" . $row["category"] . "</td>";
            }
            echo "</table>";
            echo"</form>";
            } else { echo "0 results"; }
            $conn->close();

            ?>


    </div><br /><br /><br />


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
