
<?php 
    $title = "Exercise 3: Variable, Strings & Operators";
    include 'header.php'; 
?>

<h3>3.2 Form Creation: Create a simple HTML form to collect the user’s
     Firstname and Lastname. Use the echo statement to 
     print “Hello [Firstname] [Lastname], You are welcome
      to my site.” inside an h3 tag.</h3><br>

<form method="post" action="process.php">
    <div class="form-group">
        First name: <input type="text" name="firstname" class="form-control" required><br>
    </div>
    <div class="form-group">
        Last name: <input type="text" name="secondname" class="form-control" required><br>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button><br><br>
</form>
     
<h3>3.4 HTML Table: Prepare a simple HTML table and apply 
    Bootstrap styles to it.</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>Jackson</td>
    </tr>
  </tbody>
</table>

<h3>3.5 String Variables: Write a PHP script with two string variables 
    ($str1 = "Hello"; $str2 = "World";). Join them together and 
    print the length of the string.</h3>

<?php
    $str1 = "Hello";
    $str2 = "World";
    $joinedString = $str1 . $str2;
    echo "Joined String: " . $joinedString . "<br>";
    echo "Length of the String: " . strlen($joinedString) . "<br>" . "<br>";
?>

<h3>3.6 Number Addition: Write a script to add up the numbers: 
    298, 234, 46. Use variables to store these numbers and 
    an echo statement to output your answer.</h3>

<?php
    $number1 = 298;
    $number2 = 234;
    $number3 = 46;
    $sum = $number1 + $number2 + $number3;
    echo "The sum of the numbers is: " . $sum. "<br>" . "<br>";
?>

<h3>3.7 Browser Detection: Write a PHP script to detect the browser being used to view your pages. 
    Hint: Use predefined variables: $_SERVER).</h3>

<?php
    echo "Server is: " .$_SERVER['SERVER_NAME']. "<br>" . "<br>";
?>

<h3>3.8 File Modification Time: Write a PHP script in the footer section of your universal footer 
    to display the last modification time of a file. 
    Hint: Use predefined variable $_SERVER, basename function  to get the filename , 
    filetime function to get the last modified time & date function to print the date and time</h3>

<br><br>
<?php include 'footer.php' ?>
