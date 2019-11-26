<?php error_reporting(E_ALL); ?>

<h1>Order Form</h1>
<p>Please fill out this form to place your order.fill.</p>

<form method='post' action='watWk5ex.php'>
    <fieldset>
        <legend>Enter your login details</legend>
        <label for='userName'>User Name:
            <input id='userName' type='text' name='txt_username' value='<?php if (isset($_POST['txt_username'])) {
                                                                            echo $_POST['txt_username'];
                                                                        } ?>'></label>

        <label for='email'>Email:
            <input id='email' type='email' name='txt_email' value='<?php if (isset($_POST['txt_email'])) {
                                                                        echo $_POST['txt_email'];
                                                                    }
                                                                    ?>'></label>
    </fieldset>
    <fieldset>
        <legend>Pizza Selection</legend>
        <label>Size:</label>

        <input id='small' type='radio' name='rbtn' value='Small' <?php if (isset($_POST['rbtn']) && $_POST['rbtn'] == "Small") echo "checked"; ?>><label for='small'>small</label>
        <input id='medium' type='radio' name='rbtn' value='Medium' <?php if (isset($_POST['rbtn']) && $_POST['rbtn'] == "Medium") echo "checked"; ?>><label for='medium'>medium</label>
        <input id='large' type='radio' name='rbtn' value='Large' <?php if (isset($_POST['rbtn']) && $_POST['rbtn'] == "Large") echo "checked"; ?>><label for='large'>large</label></br>
        <label>Topping:
            <select name="topping">
                <option name='prompt' value="Please select" <?php if (isset($_POST['topping']) && $_POST['topping'] == "Please select") echo "selected='selected'"; ?>>Please select</option>
                <option name='pepperoni' value="Pepperoni" <?php if (isset($_POST['topping']) && $_POST['topping'] == "Pepperoni") echo "selected='selected'"; ?>>Pepperoni</option>
                <option name='mushrooms' value="Mushrooms" <?php if (isset($_POST['topping']) && $_POST['topping'] == "Mushrooms") echo "selected='selected'"; ?>>Mushrooms</option>
                <option name='onions' value="Onions" <?php if (isset($_POST['topping']) && $_POST['topping'] == "Onions") echo "selected='selected'"; ?>>Onions</option>
            </select></label></br>
        <label>Extras:

            <input id='Parmesan' name='chkbox[]' type='checkbox' value='Parmesan' <?php if (isset($_POST['chkbox']) && in_array("Parmesan", $_POST['chkbox'])) echo 'checked'; ?>>
            <label for='Parmesan'>Parmesan</label>
            <input id='Olivers' name='chkbox[]' type='checkbox' value='Olivers' <?php if (isset($_POST['chkbox']) && in_array("Olivers", $_POST['chkbox'])) echo 'checked'; ?>>
            <label for='Olivers'>Olivers</label>
            <input id='Capers' name='chkbox[]' type='checkbox' value='Capers' <?php if (isset($_POST['chkbox']) && in_array("Capers", $_POST['chkbox'])) echo 'checked'; ?>>
            <label for='Capers'>Capers</label>
        </label>
    </fieldset></br>
    <input type='submit' value='submit' name='btn_submit'>
    <input type='reset' value='clear' name='btn_clear'>
    </fieldset>
</form>

<?php
//Gather order details
if (isset($_POST['btn_submit'])) {
    $customer_id = $_POST['txt_username'];
    $email = $_POST['txt_email'];
    $size = $_POST['rbtn'];
    $topping = $_POST['topping'];
    $extras = '';

    if (empty($customer_id) || empty($email)) {
        echo 'Please provide a customer id and email</br>';
    } else {
        if (empty($size) || empty($topping)) {
            echo 'Please select a size and topping</br>';
        } else {
            foreach ($_POST['chkbox'] as $selected) {
                $extras .= $selected . ' ';
            }
            // Print out the details
            echo '<h2>Thank you for your order:</h2>';
            echo 'Customer ID: <b>' . $customer_id . '</b></br>';
            echo 'Email: <b>' . $email . '</b></br>';
            echo 'Your order: <b>' . $size . ' ' . $topping . '</b></br>';
            echo 'Extra Toppings: <b>' . $extras . '</b></br>';
        }
    }
}
