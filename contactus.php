<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/contactusstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/everypagestyle.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
</head>
<body>
    <!-- Nav Bar -->
    <nav class="nav-bar">
        <a href="homepage.html" class="barItem">Home</a>
        <a href="amenities.html" class="barItem">Amenities</a>
        <a href="ratesreservations.html" class="barItem">Rates & Reservations</a>
        <a href="sitemap.html" class="barItem">Site Map</a>
        <a href="seasonalsites.php" class="barItem">Available Seasonal Sites</a>
        <a href="lake.html" class="barItem">The Lake</a>
        <a href="location.html" class="barItem">Location</a>
        <a href="areaattractions.html" class="barItem">Area Attractions</a>
        <a href="photogallery.html" class="barItem">Photo Gallery</a>
        <a href="contactus.php" class="active">Contact Us</a>
    </nav>

    <div class="slogan">
        <div class="dropdown">
            <button class="dropbtn"><i class="fa fa-bars"></i></button>
            <div class="dropdown-content">
                <a href="homepage.html" class="barItem">Home</a>
                <a href="amenities.html" class="barItem">Amenities</a>
                <a href="ratesreservations.html" class="barItem">Rates & Reservations</a>
                <a href="sitemap.html" class="barItem">Site Map</a>
                <a href="seasonalsites.php" class="barItem">Available Seasonal Sites</a>
                <a href="lake.html" class="barItem">The Lake</a>
                <a href="location.html" class="barItem">Location</a>
                <a href="areaattractions.html" class="barItem">Area Attractions</a>
                <a href="photogallery.html" class="barItem">Photo Gallery</a>
                <a href="contactus.html" class="active">Contact Us</a>
            </div>
        </div>
        <div class="slogan">
            <a href="adminSignIn.php" class=adminBtn><img src= "images/header.png"></a>
        </div>
    </div>

    <div class="page">Contact Us</div>

    <div class="container">
        <div class="row">
            <div class="column">
              <form action="/ContactUs.php">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                <input type="submit" value="Submit">
              </form>
            </div>
        </div>
        <p><pre>
    
    If you wish to contact us by e-mail, 
    phone or letter please contact us at:
    <b>
    Northwood Shores
    1876 29 3/4 Ave
    Rice Lake, WI 54868
    (715)234-1150 SEASONAL
    Cell (815)703-8233 YEAR ROUND
    </b>
    Off Season
    <b>
    PO Box 494
    Roscoe, IL 61073
    </b>
    Email Earl

    IF THE ABOVE LINK DOES NOT WORK EMAIL: 
    
    <b>
            bordercamp@yahoo.com
    </b>

    2022 Northwood Shores Campground, LLC All rights reserve




    
        </pre>
        </p>
    </div>

    <footer> 
        <p>2022 Northwood Shores Campground, LLC All rights reserved </p>
        <a href="https://www.facebook.com/Northwood-Shores-Campground-202453299841458/" class="fa fa-facebook" target="_blank"></a>
    </footer>
    
</body>
</html>