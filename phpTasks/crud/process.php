<?php
// what to do with the data that we get through the form
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid']; 

// connect to the database server
    include 'db.php';

//write sql statement to insert data
$sql = "insert into studentsinfo(first_name, last_name, city, groupId)
        values ('$fname', '$lname', '$city', '$groupid')";

if ($conn -> query($sql)===TRUE) {
    echo "Your data was recorded";
}
else {
    echo "Error :" .$sql . "<br>" . $conn->error;
}

//close the data base connection
$conn->close();
}
?>
