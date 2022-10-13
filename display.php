 <?php
$servername = "sql309.epizy.com";
$username = "epiz_32554760";
$password = "<same as your cpanel password>";
$dbname = "epiz_32554760_bookstore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, author, year_published, genre FROM collections";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - title: " . $row["author"]. " " . $row["year_published"]. " " . $row["genre"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 
