<?php error_reporting(E_ALL); ?>

<h1>Processing Input from HTML Forms</h1>
<h2>Login Form using GET</h2>
<form method="post" action="watWk5.php">
    <fieldset>
        <legend>
            Login
        </legend>
        <label for="email">Email: </label>
        <input type="text" name="txtEmail" value="<?php if (isset($_POST['txtEmail'])) {
                                                        echo $_POST['txtEmail'];
                                                    } ?>" /><br />
        <label for="passwd">Password: </label>
        <input type="password" name="txtPass" /><br />
        <input type="submit" value="Submit" name="loginSubmit" />
        <input type="reset" value="Clear" />
    </fieldset>
</form>

<form method="post" action="watWk5.php">
    <fieldset>
        <legend>Comments</legend>
        <label for="email">Email: </label>
        <input type="text" name="txt_email" value="<?php if (isset($_POST['txt_email'])) {
                                                        echo $_POST['txt_email'];
                                                    } ?>" /><br />
        <textarea rows="4" cols="50" name="txtarea_comment" placeholder="Type comments here"></textarea><br />
        <label for="checkbox">Click to Confirm: </label>
        <input type="checkbox" name="chkbox_confirm" value="agree"><br />
        <input type="submit" value="Submit" name="btn_submit" />
        <input type="reset" value="Clear" />
    </fieldset>
</form>

<form method='post' action='watWk5.php'>
    <h2>Tax Calculator</h2>
    <fieldset>
        <legend>Without TAX calculator</legend>
        <label for='afterTax'>After Tax Price:
            <input id='afterTax' type='number' step='0.01' name='in_afterTax' value="<?php if (isset($_POST['in_afterTax'])) {
                                                                                            echo $_POST['in_afterTax'];
                                                                                        } ?>" /></label>
        <label for='taxRate'>Tax Rate:
            <input id='taxRate' type='number' name='in_taxRate' value="<?php if (isset($_POST['in_taxRate'])) {
                                                                            echo $_POST['in_taxRate'];
                                                                        } ?>" /></label>
        <input type='submit' value='submit' name='tx_submitBtn' />
        <input type='reset' value='Clear' name='tx_clearBtn' /></br>
    </fieldset>

</form>

<h1>Passing Data Appended to an URL</h1>
<h2>Pick a category</h2>
<a href="watWk5.php?cat=Films">Films</a>
<a href=" watWk5.php?cat=Books">Books</a>
<a href=" watWk5.php?cat=Music">Music</a>

<?php
// Gather data from form
// $email = $_GET['txtEmail'];
// $password = $_GET['txtPass'];
if (isset($_POST['loginSubmit'])) {
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPass'];

    if (empty($email) || empty($password)) echo 'Email or password cannot be empty</br>';
    else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) echo 'Please enter a valid email</br>';
        else echo 'Email: ' . $email . ' Password: ' . $password . '</br>';
    }
} else {
    // Do nothing
}


if (isset($_POST['btn_submit'])) {
    $email = $_POST['txt_email'];
    $comment = $_POST['txtarea_comment'];
    if (isset($_POST['chkbox_confirm'])) {
        $confirm = 'Agreed';
    } else {
        $confirm = 'Not Agreed';
    }

    if (empty($email)) {
        echo 'Email cannot be empty</br>';
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) echo 'Please enter a valid email</br>';
        else {
            echo 'Email: ' . $email . '</br>';
            echo 'Comments: ' . $comment . '</br>';
            echo 'Confirm: ' . $confirm . '</br>';
        }
    }
}

// Tax Calculator
if (isset($_POST['tx_submitBtn'])) {
    $after_tax_price = $_POST['in_afterTax'];
    $tax_rate = $_POST['in_taxRate'];

    if (empty($after_tax_price) || empty($tax_rate)) echo 'All Fields Required</br>';
    else {
        if (!filter_var($tax_rate, FILTER_VALIDATE_INT)) echo 'Please enter a whole number for tax rate</br>';
        else {
            $before_tax_price = (100 * $after_tax_price) / (100.0 + $tax_rate);
            echo '<b>Price before tax = £' . number_format($before_tax_price, 2) . '</b></br>';
        }
    }
}
if(isset($_GET['cat'])) echo 'You clicked: ' . $_GET['cat'];
