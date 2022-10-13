 <?php
$servername = "sql309.epizy.com";
$username = "epiz_32554760";
$password = "<please use your password>";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 

http://iep415.infinityfreeapp.com/phpinfo.php
