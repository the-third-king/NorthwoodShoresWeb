<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>siteChange.php</title>
    <link rel="stylesheet" href="css/siteChangeStyle.css">
</head>
<body>
    <div class="outer-container">
            
        <form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

            <div class="container">
                <label for="site"><b>Camp Site: </b></label>
                <input type="number" placeholder="Enter Site number" name="site" required>
                    
                <button type="submit">Search</button>
                <a href="HomePage.html">Back To Home Page</a>
            </div>
            
        </form>
        
        <div class="tableContain">
            <table id="siteTable"></table>
        </div>
        
    </div>
</body>
</html>

<?php
    $siteNum = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $siteNum = test_input($_POST['site']);
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
        
        $query = "SELECT id, available, type FROM site WHERE id=$siteNum;";
        $response = mysqli_query($dbc, $query);
        if($site = mysqli_fetch_array($response)){
            
            if($site['available'] == 1){
                $query = "UPDATE site SET available=false WHERE id=$siteNum;";
                if(mysqli_query($dbc, $query)){
                    echo "<script>alert('Update Successful.  Campsite ". $siteNum." is now unavailable')</script>";
                }
            }else{
                $query = "UPDATE site SET available=true WHERE id=$siteNum;";
                if(mysqli_query($dbc, $query)){
                    echo "<script>alert('Update Successful. Campsite ". $siteNum." is now available')</script>";
                }
            }
        }


        $query = "SELECT id, available, type FROM site WHERE id=$siteNum;";
        $response = mysqli_query($dbc, $query);
        if($site = mysqli_fetch_array($response)){
            $id = $site['id'];
            $availability = "";
            $type = $site['type'];

            if($site['available'] == 1){
                $availability = "Yes";
            }else{
                $availability = "No";
            }
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

            echo
                "<script>
                    var table = document.getElementById(\"siteTable\");
                    var row = table.insertRow(0);
                    row.insertCell(0).outerHTML = \"<th>Site Number</th>\";
                    row.insertCell(1).outerHTML = \"<th>Available</th>\";
                    row.insertCell(2).outerHTML = \"<th>Site Type</th>\";
                    row = table.insertRow(1);
                    row.insertCell(0).outerHTML = \"<td>".$id."</td>\";
                    row.insertCell(1).outerHTML = \"<td>".$availability."</td>\";
                    row.insertCell(2).outerHTML = \"<td>".$type."</td>\";
                </script>";
        }else{
            echo "<script>alert(\"No such camp site\");</script>";
        }

        mysqli_close($dpc);
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>