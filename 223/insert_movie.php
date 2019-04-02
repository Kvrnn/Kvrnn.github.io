<?php

include_once ('connect.php');
// Save info
$m_title = $_POST['title'];
$m_year = $_POST['year'];
$m_genre = $_POST['genre'];
$m_director = $_POST['director'];

// Attempt insert query execution
$sql = "INSERT INTO movies (title, year, genre, director) VALUES ('$m_title', $m_year, '$m_genre', '$m_director')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
 
