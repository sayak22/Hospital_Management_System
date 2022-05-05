

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@300;400;700&family=Dancing+Script&family=Pacifico&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/5e62d29057.js"
      crossorigin="anonymous"
    ></script>
    <title>Doctors</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <!-- navbar -->
    <div id="navbar">
      <div class="img-heading">
        <a href="index.html">
          <img src="IIITU_logo.gif" alt="IIITU" id="iiitulogo" />
        </a>
        <h1 id="heading">IIIT Una Clinic</h1>
      </div>
      <div class="nav-links">
        <ul>
          <li><a class="nav-link" href="index.html">Home</a></li>
          <li><a class="nav-link" href="doctors.php">Doctors</a></li>
          <li><a class="nav-link" href="query.html">Querys</a></li>
          <li><a class="nav-link" href="about.html">About</a></li>
          <li class="login-signup">
            <a href="login.html">login</a> / <a href="signup.html">signup</a>
          </li>
        </ul>
      </div>
      <div class="burger">
        <i class="fas fa-bars"></i>
      </div>
    </div>
    <!-- navbar end -->
    <div class="doctor">
      <h2>Details of doctors</h2>
    </div>
   
    <?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "hospital";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
 <table cellpadding="0" cellspacing="0" width="100%" style="border: 1px;" rules="none">
    <tbody>
        <tr>
            <th style="width: 10px;">SNo.</th>
            <th style="width: 30px;">Name</th>
            <th style="width: 30px;">Email</th>
            <th style="width: 50px;">Phone</th>
            <th style="width: 40px;">Speciality</th>
        </tr>

        
<?php
$sql = "SELECT id,name,email,phone,speciality FROM `hospital`.`doctor`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>

        <tr>
            <td style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;"><?php echo $row["id"]?></td>
            <td style="border-top: thin solid; border-bottom: thin solid;"><?php echo $row["name"]?></td>
            <td style="border-top: thin solid; border-bottom: thin solid;"><?php echo $row["email"]?></td>
            <td style="border-top: thin solid; border-bottom: thin solid;"><?php echo $row["phone"]?></td>
            <td style="border-top: thin solid; border-bottom: thin solid; border-right: thin solid;"><?php echo $row["speciality"]?></td>
        </tr>

       
      
    
<?php
    // echo "id: " . $row["sno"]. " - Name: " . $row["username"]. " " . $row["username"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
</tbody>
</table>
  
    <script src="./app.js"></script>
  </body>
</html>
