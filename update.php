<?php  
mysql_connect('localhost', 'root', "");
mysql_select_db('invoices');

$sql = "SELECT loss , insured FROM claim";
$result = mysql_query($sql);

echo "<select name='username'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['loss'] ."'>" . $row['loss'] ."</option>";
}
echo "</select>";

?>