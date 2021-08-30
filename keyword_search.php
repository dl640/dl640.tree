<!DOCTYPE html>
<html>
<?php
include 'db_connect.php';
$keywordfromform =$_GET["kwname"];
?>
<title>Search Results?</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}
.menu {
  display: none;
}
</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s2">
      <a href="index.php#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s2">
      <a href="index.php#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s2">
      <a href="index.php#menu" class="w3-button w3-block w3-black">FAMILY</a>
    </div>
    <div class="w3-col s2">
      <a href="index.php#search" class="w3-button w3-block w3-black">SEARCH</a>
    </div>
    <div class="w3-col s2">
      <a href="index.php#add" class="w3-button w3-block w3-black">ADD MEMBER</a>
    </div>
  </div>
</div>

<!-- Keyword Container -->
<div class="w3-container" id="keyword">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">These are the result for <?php echo "$keywordfromform" ;?></span></h5>
      <table class="w3-content" style="max-width:700px" border="2">
      <tr>
        <td><b>ID</td>
        <td><b>First Name</td>
        <td><b>Last Name</td>
        <td><b>Last Name Nee</td>
        <td><b>Country of Birth</td>
        <td><b>Edit</td>
        <td><b>Delete</td>
      </tr>

<?php

$sql = "SELECT PersonID, firstname, lastname,lastname_nee, placeofbirth FROM Person_table WHERE firstname LIKE '%$keywordfromform%'OR lastname LIKE '%$keywordfromform%'OR lastname_nee LIKE '%$keywordfromform%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc())
{
?>
<tr>
    <td> <?php echo $row["PersonID"]; ?> </td>
    <td><?php echo $row["firstname"]; ?></td>
    <td><?php echo $row["lastname"]; ?></td>
    <td><?php echo $row["lastname_nee"]; ?></td>
    <td><?php echo $row["placeofbirth"]; ?></td>
    <td><a href="edit_test.php?userid=<?php echo $row["PersonID"]; ?>">Edit</a></td>
    <td><a href="delete.php?userid=<?php echo $row["PersonID"]; ?>">Delete</a></td>
</tr>


<?php
}
}else {
echo "0 results";
}
?>
</table>
<br>
<a href="index.php"> Return to main page</a>
</body>
</html>
