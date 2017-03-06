<!DOCTYPE html>
<html>
<head>
	<title>View All Claims!</title>
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



?>