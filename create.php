<!DOCTYPE HTML>
<title>Home</title>
<html>  
<h2>Aspire Porforma Management System</h2>
<h3>Create a Claim</h3>
<body>
<a href="create.php">Create a Claim</a> - 
<a href="Update.php">Update Information</a> - 
<a href="generatep.php">Generate a Performa</a> - 
<a href="generatei.php">Generate an Invoice</a>  

</body>

<form action="insert.php" method="post">
    <p>
        <label for="claimnumber">Claim Number (Extract from Google Sheet):</label>
        <input type="text" name="claimnumber" id="claimnumber">
    </p>

    <p>
        <label for="insured">Insured:</label>
        <input type="text" name="insured" id="insured">
    </p>
    <p>
        <label for="insuranceCompany">Insurance Company:</label>
        <input type="text" name="insuranceCompany" id="insuranceCompany">
    </p>
    <p>
        <label for="kindAttn">Kind Attn:</label>
        <input type="text" name="kindAttn" id="kindAttn">
    </p>

    <p>
        <label for="ourref">Our Ref:</label>
        <input type="text" name="ourref" id="ourref">
    </p>


    <p>
        <label for="risknote">Risk Note:</label>
        <input type="text" name="risknote" id="risknote">
    </p>


    <p>
        <label for="Location">Location of Loss:</label>
        <input type="text" name="Location" id="Location">
    </p>
    

    <p>
        <label for="loss">Loss:</label>
        <input type="text" name="loss" id="loss">
    </p>


    <p>
        <label for="date">Date of Loss:</label>
        <input type="date" name="date" id= "date">
    </p>

  <p>
        <label for="broker">Broker:</label>
        <input type="text" name="broker" id="broker">
    </p>

    <input type="submit" value="Submit">
</form>
</html>

