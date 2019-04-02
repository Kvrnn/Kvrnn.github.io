<?php

include_once ('connect.php');
// Save info
$m_row= $_POST['row'];

// Attempt insert query execution
$sql = "DELETE FROM movies WHERE movie_id = $m_row";
if(mysqli_query($link, $sql)){
    echo "Records deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
