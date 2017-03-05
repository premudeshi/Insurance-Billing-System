
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
$update = mysqli_real_escape_string($link, $_REQUEST['updateselection']);
$updation = mysqli_real_escape_string($link, $_REQUEST['updation']);

 
// attempt insert query execution
$sql = "UPDATE `claim` SET $updation = $update WHERE `claim`.`id` = $number ";
if(mysqli_query($link, $sql)){
    echo "Claim Updated successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>