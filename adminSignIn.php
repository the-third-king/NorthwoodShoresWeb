<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminSignIn</title>
    <link rel="stylesheet" href="css/adminSignInStyle.css">
</head>
<body>
<?php
  $username = $password = "";

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = test_input($_POST['uname']);
    $password = test_input($_POST['psw']);
  }

  function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
    
<h2>Admin Login Form</h2>

<form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="HomePage.html" class="cancelbtn" >Cancel</a>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

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
  
  $query = "SELECT username, pword FROM admin;";
  $response = mysqli_query($dbc, $query);
  $person = mysqli_fetch_array($response);
  $resUsername = $person['username'];
  $resPassword = $person['pword'];

  if(strcmp($password, $resPassword) == 0 && strcmp($username, $resUsername) == 0){
    echo "<script>window.location.replace(\"siteChange.php\");</script>";
  }else if(strcmp($password, "") == 0){
  }else{
    echo "<script>alert(\"Failed Login\");</script>";
  }
  mysqli_close($dpc);
?>

</body>
</html>



