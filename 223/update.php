<?php

include_once ('connect.php');
// Save info from interface.html
$m_row= $_POST['row2'];
$m_field= $_POST['field'];
$m_data= $_POST['data'];
// Attempt update query execution
$sql = "UPDATE movies SET $m_field = '$m_data' WHERE movie_id = $m_row";
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
