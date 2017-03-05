<!DOCTYPE HTML>
<title>Home</title>
<html>  
<h2>Aspire Porforma Management System</h2>
<h3>Update a Claim</h3>
<body>
<a href="create.php">Create a Claim</a> - 
<a href="Update.php">Update Information</a> - 
<a href="generatep.php">Generate a Performa</a> - 
<a href="generatei.php">Generate an Invoice</a>  

</body>

<form action="updateclaim.php" method="post">
    <p>
        <label for="claimnumber">Claim Number (Extract from Google Sheet):</label>
        <input type="text" name="claimnumber" id="claimnumber">
    </p>

    <p>
        <label for="updateselection" id="updateselection">What to Update:</label>
        <select name="updateselection">
        <option value="insured">Insured</option>
        <option value="insurance_company">Insurance Company</option>
        <option value="kind_attn">Kind Attn</option>
        <option value="our_ref">Refrance</option>
        <option value="risk_note">Risk Note</option>
        <option value="location_loss">Location of Loss</option>
        <option value="loss">Loss</option>
        <option value="broker">Broker</option>
        </select>
    </p>

    <p>
        <label for="updation">Update To:</label>
        <input type="text" name="updation" id="updation" required>
    </p>

    <input type="submit" value="Submit">
</form>
</html>

