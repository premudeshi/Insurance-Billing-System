<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "invoices");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$number = mysqli_real_escape_string($link, $_REQUEST['claimnumber']);
$insured = mysqli_real_escape_string($link, $_REQUEST['insured']);
$insurance_company = mysqli_real_escape_string($link, $_REQUEST['insuranceCompany']);
$kind = mysqli_real_escape_string($link, $_REQUEST['kindAttn']);
$our_ref = mysqli_real_escape_string($link, $_REQUEST['ourref']);
$risk_note = mysqli_real_escape_string($link, $_REQUEST['risknote']);
$location = mysqli_real_escape_string($link, $_REQUEST['Location']);
$loss = mysqli_real_escape_string($link, $_REQUEST['loss']);
$date = mysqli_real_escape_string($link, $_REQUEST['date']);
$broker = mysqli_real_escape_string($link, $_REQUEST['broker']);
 
// attempt insert query execution
$sql = "INSERT INTO claim (id , claimnumber, insured, insurance_company, kind_attn , our_ref, risk_note , location_loss, loss, date, broker) VALUES (' ' ,'$number', '$insured', '$insurance_company', '$kind' , '$our_ref' , '$risk_note' , '$location' , '$loss' , '$date' , '$broker')";
if(mysqli_query($link, $sql)){
    echo "Claim added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>