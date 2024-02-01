<?php
// what to do with the form data
$title = "Your Information";
include 'header.php';
$firstname = $_POST["firstname"];
$secondname =$_POST["secondname"];

echo "<h3>Hello ".$firstname." ". $secondname. "<br><br> you are welcome to my site.</h3><br><br>";

include 'footer.php';
?>