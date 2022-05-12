<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/seasonalsitesstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/everypagestyle.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Seasonal Sites</title>
</head>

<body>
    <nav class="nav-bar">
        <a href="homepage.html" class="barItem">Home</a>
        <a href="amenities.html" class="barItem">Amenities</a>
        <a href="ratesreservations.html" class="barItem">Rates & Reservations</a>
        <a href="sitemap.html" class="barItem">Site Map</a>
        <a href="seasonalsites.php" class="active">Available Seasonal Sites</a>
        <a href="lake.html" class="barItem">The Lake</a>
        <a href="location.html" class="barItem">Location</a>
        <a href="areaattractions.html" class="barItem">Area Attractions</a>
        <a href="photogallery.html" class="barItem">Photo Gallery</a>
        <a href="contactus.php" class="barItem">Contact Us</a>
        
    </nav>

    <div class="slogan">
        <div class="dropdown">
            <button class="dropbtn"><i class="fa fa-bars"></i></button>
            <div class="dropdown-content">
                <a href="homepage.html" class="barItem">Home</a>
                <a href="amenities.html" class="barItem">Amenities</a>
                <a href="ratesreservations.html" class="barItem">Rates & Reservations</a>
                <a href="sitemap.html" class="barItem">Site Map</a>
                <a href="seasonalsites.php" class="active">Available Seasonal Sites</a>
                <a href="lake.html" class="barItem">The Lake</a>
                <a href="location.html" class="barItem">Location</a>
                <a href="areaattractions.html" class="barItem">Area Attractions</a>
                <a href="photogallery.html" class="barItem">Photo Gallery</a>
                <a href="contactus.php" class="barItem">Contact Us</a>
            </div>
        </div>
        <div class="slogan">
            <a href="adminSignIn.php" class=adminBtn><img src= "images/header.png"></a>
        </div>
    </div>
    
    </div>
    <div class="page">Seasonal Sites</div>
    <div class="container">
        <div class="card-available">
            <div id="seasonal">
                <h4><b>Seasonal:</b></h4>
                <p id="seasonalAvailability">None currently available</p>
            </div>
            <div id="daily">
                <h4><b>Daily:</b></h4>
                <p id="dailyAvailability">None currently available</p>
            </div>  
        </div>
        <div class="row">
            <div class="card">
                <p>Annual <b>$2,550.00</b> including tax, plus metered electricity.</p>
            </div>
            <div class="card">
                <p>Other Seasonal Sites annual <b>$2,395.00</b> including tax, plus metered electricity.</p>
            </div>
            <div class="card">
                <p>All sites have water, 20,30 & 50 AMP, and sewer. In season occupancy is prorated on a 150 day basis.</p>
            </div>
            <div class="card">
                <p>You are welcome to leave your camper on site all 12 months.</p>
            </div>
        </div>
        <h1>Available Sites</h1>
        <table id="availabilityTable"></table>
        <?php
            // Defined as constants so that they can't be changed
            DEFINE ('DB_USER', 'root');
            DEFINE ('DB_PASSWORD', '');
            DEFINE ('DB_HOST', 'localhost');
            DEFINE ('DB_NAME', 'northwood_shores');
            // $dbc will contain a resource link to the database
            // @ keeps the error from showing in the browser
            $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
            OR die('Could not connect to MySQL: ' .
            mysqli_connect_error());
            //echo "<script>alert('Connection Successful')</script>";

            $query = "SELECT id, available, type FROM site WHERE available=1;";
            $response = mysqli_query($dbc, $query);

            echo
                "<style>
                    table, td, tr, th{
                        border: 2px solid black;
                    }
                    table{
                        background-color: #789495;
                        width: 90%;
                        border-radius: 5px;
                        margin-bottom: 200px;
                    }
                    th{
                        background-color: #2186e4;
                        color: lightgray;
                        font-size: 25px;
                    }
                    td, tr{
                        font-size: 20px;
                        background-color: lightgray;
                    }
                    td{
                        padding-left: 4px;
                        font-weight: bolder;
                    }
                </style>";

            // mysqli_fetch_array will return a row of data from the query
            // until no further data is available
            echo 
                "<script>
                    var table = document.getElementById(\"availabilityTable\");
                    var row = table.insertRow(0);
                    row.insertCell(0).outerHTML = \"<th>Site Number</th>\";
                    row.insertCell(1).outerHTML = \"<th>Available</th>\";
                    row.insertCell(2).outerHTML = \"<th>Site Type</th>\";
                </script>";
            $rowNum = 1;
            $numDaily = 0;
            $numSeasonal = 0;
            while($row = mysqli_fetch_array($response)){

                $id = $row['id'];
                $availability = "Yes";
                $type = $row['type'];

                echo
                    "<script>
                        var table = document.getElementById(\"availabilityTable\");
                        var row = table.insertRow(". $rowNum . ");
                        row.insertCell(0).outerHTML = \"<td>".$id."</td>\";
                        row.insertCell(1).outerHTML = \"<td>".$availability."</td>\";
                        row.insertCell(2).outerHTML = \"<td>".$type."</td>\";
                    </script>";
                
                if(strcmp($type, "seasonal") == 0){
                    $numSeasonal++;
                }else{
                    $numDaily++;
                }
                $rowNum++;
            }

            echo 
                "<script>
                    var seasonal = document.getElementById(\"seasonal\");
                    seasonal.style.backgroundColor = 'rgb(255, 89, 89)';
                    if(".$numSeasonal.">0){
                        seasonal.style.backgroundColor = 'rgb(87, 221, 87)';
                        document.getElementById(\"seasonalAvailability\").innerHTML = \"".$numSeasonal." sites available.\";
                    }
                    var daily = document.getElementById(\"daily\");
                    daily.style.backgroundColor = 'rgb(255, 89, 89)';
                    if(".$numDaily.">0){
                        daily.style.backgroundColor = 'rgb(87, 221, 87)';
                        document.getElementById(\"dailyAvailability\").innerHTML = \"".$numDaily." sites available.\";
                    }
                </script>";

            //Close connection
            mysqli_close($dbc);

        ?>
    </div>
    <footer>
        <p>2022 Northwood Shores Campground, LLC All rights reserved </p>
        <a href="https://www.facebook.com/Northwood-Shores-Campground-202453299841458/" class="fa fa-facebook"
            target="_blank"></a>
    </footer>
</body>

</html>



