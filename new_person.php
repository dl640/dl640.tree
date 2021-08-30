!DOCTYPE html>
<html>

<title>Add a Person</title>
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


<?php
include 'db_connect.php';

$add_firstname=$_GET["addfn"];
$add_lastname=$_GET["addln"];
$add_lastname_nee=$_GET["addln_nee"];
$add_gender=$_GET["add_gender"];
$add_dob=$_GET["add_dob"];
//$add_dod=$_GET["add_dod"];
$add_momID=$_GET["addmother"];
$add_dadID=$_GET["addfather"];
$add_country=$_GET["country"];



?>
<h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">  These are the result for<?php echo "$add_firstname $add_lastname "?></span></h5>;
<table class="w3-content" style="max-width:700px" border="2">
<tr>
  <td><b>First Name</td>
  <td><b>Last Name</td>
  <td><b>Last Name Nee</td>
  <td><b>Gender</td>
  <td><b>motherID</td>
  <td><b>fatherID</td>
  <td><b>Country of Birth</td>
  <td><b>Date of Birth</td>

</tr>


<tr>

<td><?php echo "$add_firstname"; ?></td>
<td><?php echo "$add_lastname"; ?></td>
<td><?php echo "$add_lastname_nee"; ?></td>
<td><?php echo "$add_gender"; ?></td>
<td><?php echo "$add_momID"; ?></td>
<td><?php echo "$add_dadID"; ?></td>
<td><?php echo "$add_country"; ?></td>
<td><?php echo "$add_dob"; ?></td>
</tr>

</table>
</div>
</div>
<?php
$sql = "INSERT INTO Person_table (PersonID, firstname,lastname,lastname_nee, gender, motherID, fatherID, placeofbirth, dob )
 VALUES (NULL,'$add_firstname','$add_lastname','$add_lastname_nee','$add_gender','$add_momID','$add_dadID','$add_country','$add_dob') ";
$result = $mysqli->query($sql);


?>



<br>
<a href="index.php"> Return to main page</a>
</body>
</html>
