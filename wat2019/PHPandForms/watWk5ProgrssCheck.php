<!DOCTYPE html>
<html>

<head>
    <title>WAT Week 5 Progress Check</title>
</head>

<body>
    <h1>WAT Week 5 Progress Check</h1>
    <h1>Generate Statements</h1>
    <?php
    echo 'Dipesh B.C.</br>';
    echo 'C7202612</br>';
    echo '"It\'s not more that £3"';
    //produce code that will display your name and ID on separate lines
    //produce code to output the string "It's not more than £3" including all
    //speech marks.
    ?>
    <h1>Use Arithmetic Operators </h1>
    <?php
    $loan = 500;
    $interest_rate = 3.5;
    $annual_interest_payable = ($loan / 100.0) * $interest_rate;

    echo 'Loan: ' . $loan . '</br>';
    echo 'Rate: ' . $interest_rate . '%</br>';
    echo 'Payable: £' . number_format($annual_interest_payable, 2) . '</br>';
    /*Calculate annual interest paid for a loan. Declare two variables one to
*hold the value of loan and one the interest rate. Set these to 500 and 3.5
*respectively. Calculate the annual interest payable based on the formula
*interest paid = (loan amount / 100) x rate of interest
*Display the following statement using your variables:
* Loan: 500
* Rate: 3.5%
* Payable: £17.50
*/
    ?>
    <h1>Use Conditional Statements</h1>
    <?php
    $username = 'user01';
    $password = 'pass';
    $pwd_len = strlen($password);

    if ($pwd_len >= 6) {
        if ($username == 'user01' && $password == 'passwd') {
            echo 'Success</br>';
        } else {
            echo 'Fail</br>';
        }
    } else {
        echo 'Please use at least 6 characters</br>';
    }
    /*Declare variables to hold username and password, assign the values
* "user01" and "pass". Write code that will test the value
* of your two variables and display the word "success" if
* user is "user01" and password is "passwd", or "fail" if not.
*/
    /*Use the same variables but this time write code to first test if
* the password is at least 6 characters in length, if not
* display a message "Please use at least 6 characters", if this test
* is passed then test as before.
*/

    ?>
</body>

</html>