<!DOCTYPE html>
<html>
<head>
	<title>View All Claims!</title>
	<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>
<h2>View all Claims</h2>
<h3>Search:</h3>
<body>
<form action="search.php">
        <label for="updateselection" id="updateselection">What to Update:</label>
        <select name="searchselection">
        <option value="insured">Insured</option>
        <option value="insurance_company">Insurance Company</option>
        <option value="kind_attn">Kind Attn</option>
        <option value="our_ref">Refrance</option>
        <option value="risk_note">Risk Note</option>
        <option value="location_loss">Location of Loss</option>
        <option value="loss">Loss</option>
        <option value="broker">Broker</option>
        </select>

<label for="text">Search For:</label>
        <input type="text" name="text" id="text">

  <input type="submit" value="Submit">
</form>


</body>
<h3>Claims:</h3>
</html>


<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "invoices";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM claim";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
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