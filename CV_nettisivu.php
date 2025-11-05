<!DOCTYPE html>

<html lang="fi">

<head>

<meta charset = "UTF-8" name = "viewport" content = "width=device-width, initial-scale=1.0"/>

<link href="CV_nettisivu.css" rel="StyleSheet" type="text/css" />

</head>

<body>

<!-- Buttons for the tab-->
<button class="tablink" onclick="openPage('Home', this, 'red')" id="defaultOpen">Home</button>
<button class="tablink" onclick="openPage('News', this, 'green')" >News</button>
<button class="tablink" onclick="openPage('Contact', this, 'blue')">Contact</button>
<button class="tablink" onclick="openPage('About', this, 'orange')">About</button>

<div id="Home" class="tabcontent">
  
<?php
/// Create some php for the "home" tab

echo "this is the home tab";

?>
</div>

<div id="News" class="tabcontent">
<?php
/// Create some php for the "news" tab

echo "this is the news tab";

?>
</div>

<div id="Contact" class="tabcontent">
<?php
/// Create some php for the "contact" tab

echo "this is the contact tab";

?>
</div>

<div id="About" class="tabcontent">
<?php
/// Create some php for the "about" tab

echo "this is the about tab";

?>
</div>

<!-- Script for the tab function-->
<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

</script>

</body>

</html>