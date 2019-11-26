<?php
//Make connection to database
include 'connection.php';
//Display heading
echo '<h2>Select ALL from the Customer Table</h2>';
//run query to select all records from customer table
$query = "SELECT * FROM Customer";
//store the result of the query in a variable called $result
$result = mysqli_query($connection, $query);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['FirstName'] . ' ' . $row['LastName'] . '
' . $row['Email'] . '<br />';
}

//Display heading
echo '<h2>Select ALL from the Customer Table with Age > 22</h2>';
//run query to select all records from customer table
$query = "SELECT * FROM Customer WHERE Age > 22";
//store the result of the query in a variable called $result
$result = mysqli_query($connection, $query);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['FirstName'] . ' ' . $row['LastName'] . '
' . $row['Email'] . '<br />';
}

//Display heading
echo '<h2>Select Females from the Customer Table with Age >= 22</h2>';
//run query to select all records from customer table
$query = "SELECT * FROM Customer WHERE Gender = 'F' && Age >= 22";
//store the result of the query in a variable called $result
$result = mysqli_query($connection, $query);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['FirstName'] . ' ' . $row['LastName'] . '
' . $row['Email'] . '<br />';
}

//Display heading
echo '<h2>Select Males from the Customer Table list by age descending</h2>';
//run query to select all records from customer table
$query = "SELECT * FROM Customer WHERE Gender = 'M' ORDER BY age desc";
//store the result of the query in a variable called $result
$result = mysqli_query($connection, $query);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['FirstName'] . ' ' . $row['LastName'] . '
' . $row['Email'] . '<br />';
}

//Display heading
echo '<h2>Select ALL with "a" in frist name</h2>';
//run query to select all records from customer table
$query = "SELECT * FROM Customer WHERE FirstName LIKE '%a%'";
//store the result of the query in a variable called $result
$result = mysqli_query($connection, $query);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['FirstName'] . ' ' . $row['LastName'] . '
' . $row['Email'] . '<br />';
}
