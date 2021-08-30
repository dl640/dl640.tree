

<html >





<head >
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

<?php
include 'db_connect.php';
?>
<!-- New Form  -->
<form class="form-horizontal" action = "keyword_search.php">
<fieldset>

<!-- Form Name -->
<legend>Family Name Search</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kwname">Name</label>
  <div class="col-md-4">
  <input id="kwname" name="kwname" type="text" placeholder="e.g. Mary Octavia Lynch" class="form-control input-md">
  <span class="help-block">Lookup family names</span>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Search</button>
  </div>
</div>

</fieldset>
</form><br>


<!-- New Form  -->
<form class="form-horizontal" action = "new_person.php" >
<fieldset>

<!-- Form Name Add Family Member -->
<legend>Add Family Member </legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="addfn">First Name</label>
  <div class="col-md-4">
  <input id="addfn"  name="addfn" type="text" placeholder="" class="form-control input-md" >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="addln">Last Name</label>
  <div class="col-md-4">
  <input id="addln"  name="addln" type="text" placeholder="" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="addln_nee">Last Name (Neé)</label>
  <div class="col-md-4">
  <input id="addln_nee"  name="addln_nee" type="text" placeholder="" class="form-control input-md">
  <span class="help-block">Last name at birth.</span>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="add_gender">Gender</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="add_gender-0">
      <input type="radio" name="add_gender" id="add_gender-0" value="1" checked="checked">
      Male
    </label>
	</div>
  <div class="radio">
    <label for="add_gender-1">
      <input type="radio"  name="add_gender" id="add_gender-1" value="0">
      Female
    </label>
	</div>
  </div>
</div>

<!-- Date Pickers -->
<div class="form-group">
    <label class="col-md-4 control-label" for="add_dob">DOB</label>
    <div class="col-md-4">
      <input id="add_dob" name="add_dob" type="date" class="form-control">
    </div>
</div>




<!-- Calls to pre-populated drop downs on php scripts -->
<!-- Mother ID -->
<div class="form-group">
    <label class="col-md-4 control-label" >Mothers Name</label>
    <div class="col-md-4">
      <?php
      include 'momID.php';
      ?>
    </div>
</div>
  <!-- Father ID -->
<div class="form-group">
      <label class="col-md-4 control-label" >Fathers Name</label>
      <div class="col-md-4">
        <?php
        include 'dadID.php';
        ?>
      </div>
</div>
<!-- Country ID -->
<div class="form-group">
    <label class="col-md-4 control-label" >Country of Birth</label>
    <div class="col-md-4">
      <?php
      include 'country_list.php';
      ?>
    </div>
</div>

<!-- Submit Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>


</fieldset>
</form>


<?php
$sqli->close();
?>



</body>
</html>
