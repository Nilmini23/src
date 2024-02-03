<?php 
    $title = "Exercise 4: Control flow and loops";
    include 'header.php'; 
?>

<h3>4.2 If-Else: Write a PHP script to get inputs (age and name) 
    from the user and based on their age, decide if he/she is 
    eligible for voting. (18 or more than 18 years is eligible 
    for voting, use form to get user input).</h3><br>

<form method="post" name="user-inputs" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
    Name: <input type="text" name="inputName" required><br><br>
    Age: <input type="number" name="inputAge"required><br><br>
    <input type="submit" name="eligibility" value="Voting Eligibility"><br><br>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset ($_POST["eligibility"])) {
            $name = $_POST["inputName"];
            $age = $_POST["inputAge"];
            if ($age>=18) {
                echo "Hi $name, Your age is $age and you are eligible for voting!"; 
            }
            else {
                echo "Hi $name, Your are underaged and ineligible for voting!"; 
            }
        }
    }
?><br><br>

<h3>4.3 Switch Case: Write a PHP script that gets the current month and 
    prints one of the following responses, depending on whether it's August or not:
        It's August, so it's still holiday.
        Not August, this is Month-name so I don't have any holidays
    Hint: You can use date(F) function to get the current month name. 
    Check Date function from the php manual page.</h3><br>

<?php
    $currentMonth = date('F');
    switch($currentMonth) {
        case 'August':
            echo "It's August, so it's still holiday.";
            break;
        default:
            echo "Not August, this is $currentMonth so I don't have any holidays";
            break;
    }
?><br><br>

<h3>4.4 For Loop: Write a PHP script that will print the multiplication table of a number 
    (n, use form to get user input).</h3><br>

<form method="post" name="multiplicationTable" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
    <label> Input a Number that you want to get a multiplication table: </label>
    <input type="number" name="multiNumber"required><br><br>
    <input type="submit" name="submit" value="Get the Multiplication Table"><br><br>
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset ($_POST["submit"])) {
        $n = $_POST["multiNumber"];
        echo "<h6>Multiplication Table for $n</h6>";
        echo "<table>";
        for ($i = 1; $i <= 10; $i++) {
            $result = $n * $i;
            echo "<tr><td>$n x $i = $result </td></tr>";
        }
        echo "</table>";
    }
}
?><br><br>

<h3>4.5 While Loop: Write a PHP script that will print all the numbers from 1 to n. 
    (use form to get user input)</h3><br>

<form method="post" name="printNumber" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
    Input Number: <input type="number" name="number"required><br><br>
    <input type="submit" name="submitNumber" value="Submit"><br><br>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset ($_POST["submitNumber"])) {
            $number = $_POST["number"];
            echo "<h4> Print numbers from 1 to $number</h4>";
            $i = 1;
            do {
                echo "$i <br>";
                $i++;
            } while ($i <= $number);
        }     
    }
?><br><br>

<h3>4.6 Foreach Loop: Write a PHP script that will print all the elements of an array. 
    $myarray=("HTML", "CSS", "PHP", "JavaScript").</h3><br>

<?php
    $myarray=array("HTML","CSS","PHP","JavaScript");
    foreach ($myarray as $value) {
    echo $value . "<br />";
   }
?>

<br><br>
<?php include 'footer.php' ?>
