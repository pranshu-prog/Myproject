<!--<?php
include("create_db.php"); 
error_reporting(0);
$query = "SELECT *FROM MyGuests";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
echo"$total";
if($total!=0)
{
  echo "Table has record";

}
else {

  echo "No record found";
} 
?>-->

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "Tukunmooly@tukun";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname, email FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]." ".$row["email"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>