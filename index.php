<!DOCTYPE html>
<html>
<?php
include 'db_connect.php';
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

.bgimg {
  background-position: center;
  height: 500px;
  background-size: cover;
  background-image: url(/images/HarrisVillage.jpg);
 
  min-height: 75%;
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
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s2">
      <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s2">
      <a href="#menu" class="w3-button w3-block w3-black">FAMILY</a>
    </div>
    <div class="w3-col s2">
      <a href="#search" class="w3-button w3-block w3-black">SEARCH</a>
    </div>
    <div class="w3-col s2">
      <a href="#add" class="w3-button w3-block w3-black">ADD MEMBER</a>
    </div>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">Harris Village, Montserrat WI</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:60px">The Children of<br> Henry and Mary Lynch</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white"></span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE LYNCHS</span></h5>
    <p>The Cafe was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p>In addition to our full espresso and brew bar menu, we serve fresh made-to-order breakfast and lunch sandwiches, as well as a selection of sides and salads and other good stuff.</p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"Use products from nature for what it's worth - but never too early, nor too late." Fresh is the new sweet.</i></p>
      <p>Chef, Coffeeist and Owner: Liam Brown</p>
    </div>
    <img src="/images/island.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
 
  </div>
</div>

<!-- Family Tree/Map Python Code Container -->
<<!-- Menu Container -->
<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">

    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">THE FAMILY</span></h5>

    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
        <div class="w3-col s6 tablink">Tree</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
        <div class="w3-col s6 tablink">Map</div>
      </a>
    </div>

    <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
      <h5>So Who Exactly Is My Cousin...</h5>
      <iframe src="https://dl640.github.io/HMLynch/index.html" height="600" Width='650' >
</iframe>

    </div>

    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
      <h5>Where in the World Were You Born...</h5>
      <iframe src="https://dl640.github.io/Map/map.html" height="600" width="650"></iframe>

    </div>
    <img src="/images/nav.jpg" style="width:100%;max-width:1000px;margin-top:32px;">

<!-- Lookup Family Member -->
<div class="w3-container" id="search" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">Lookup Family Member</span></h5>
    <!-- New Form  -->
    <form class="form-horizontal" mthod=get action = "keyword_search.php">
    <fieldset>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label"  for="kwname">Name</label>
      <div class="col-md-4">
      <input id="kwname" name="kwname" type="text" placeholder="e.g. Mary Octavia Lynch" class="form-control input-md">
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

  <!-- Add Family Member -->
    <div class="w3-container" id="add" style="padding-bottom:32px;">
      <div class="w3-content" style="max-width:700px">
        <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">Add Family Member</span></h5>
            <p>All fields must be completed for the name to be saved.</p>
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

 <img src="/images/sugar.jpg" style="width:100%;max-width:1000px;margin-top:32px;">
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</scri