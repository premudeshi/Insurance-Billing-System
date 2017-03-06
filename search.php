<!DOCTYPE html>
<html>
<head>
	<title>Search Results</title>
	<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>


</body>
<h3>Claims:</h3>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "invoices";


$link = mysqli_connect($servername, $username, $password, $dbname);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$search = mysqli_real_escape_string($link, $_REQUEST['searchselection']);
$searchfor = mysqli_real_escape_string($link, $_REQUEST['text']);


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM `claim` WHERE $search LIKE $searchfor";
$result = $conn->query($sql);




if ($result -> num_rows > 0) {
     echo "<table><tr><th>ID</th><th>Name</th><th>Insurance Company</th><th>Kind Attn</th><th>Our Ref</th><th>Risk Note</th> <th>Location of Loss</th> <th>Loss</th><th>Date of Loss</th> <th>Broker</th> </tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["id"]. "</td><td>" . $row["insured"]. "</td>  <td>" . $row["insurance_company"]. "</td>  <td>" . $row["kind_attn"]. "</td>  <td>" . $row["our_ref"]. "</td>  <td>" . $row["risk_note"]. "</td>  <td>" . $row["location_loss"]. "</td>  <td>" . $row["loss"]. "</td> <td>" . $row["date"]. "</td> <td>" . $row["broker"]. "</td> </tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  