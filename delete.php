

<?php

include "db_connect.php"; // Using database connection file here

$id = $_GET['userid']; // get id through query string

$sql = "DELETE FROM Person_table WHERE PersonID = '$id'"; // delete query
$del = $mysqli->query($sql);
if($del)
{
    mysqli_close($mysqli); // Close connection
    header("location:keyword_search.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
