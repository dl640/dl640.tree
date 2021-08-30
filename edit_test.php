<!DOCTYPE html>
<html>
<?php
include 'db_connect.php';
$id=$_GET['userid'];
?>
<title>Does this change?</title>
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

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">Updating Record Number<?php echo $id?></span></h5>
      <table class="w3-content" style="max-width:700px" border="2">
      <table border="2">
        <tr>

          <td><b>First Name</td>
          <td><b>Last Name</td>
          <td><b>Last Name Nee</td>
          <td><b>Country of Birth</td>
          <td><b>Update</td>
        </tr>

<?php



//Fetch row to be updated and display in form
$sql = "SELECT PersonID, firstname, lastname,lastname_nee, placeofbirth FROM Person_table WHERE PersonID='$id'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();

if(isset($_POST['update'])) // when click on Update button
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $lastname_nee = $_POST['lastname_nee'];
    $placeofbirth=$_POST['country'];

    $edit = "UPDATE Person_table SET firstname='$firstname', lastname='$lastname', lastname_nee='$lastname_nee',placeofbirth='$placeofbirth' WHERE PersonID='$id'";

    $update = $mysqli->query($edit);
    $message = "Record Modified Successfully";

    if($update)
    {
        $mysqli->close(); // Close connection
        header("location:keyword_search.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }
}
?>

<form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="POST">
<tr>
    <td> <input type="text" name="firstname" class="form-control" value="<?php echo $row["firstname"]; ?> "</td>
    <td><input type="text" name="lastname" class="form-control" value="<?php echo $row["lastname"]; ?>"</td>
    <td><input type="text" name="lastname_nee" class="form-control" value="<?php echo $row["lastname_nee"]; ?>"</td>

    <td><div class="form-group">
      <div class="col-md-4">

          <?php
          include 'country_list.php';
          ?>
        </div>
    </div>
    </td>

    <!-- Submit Button -->
    <td>
    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-4">
        <input type="hidden" name="PersonID" value="<?php echo $row['PersonID']; ?>">
        <input type="submit" name="update" class="btn btn-primary" value="update">
        <a href="keyword_search.php" class="btn btn-default">Cancel</a>
      </div>
    </div>
    </td>
  </tr>

  </form>
<?php

?>
</table>


<br>
<a href="index.php"> Return to main page</a>
