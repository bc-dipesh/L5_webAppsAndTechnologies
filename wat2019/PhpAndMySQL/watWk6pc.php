<!DOCTYPE html>
<html>

<head>
    <title>week 6 Progress Check</title>
</head>

<body>
    <h1>Search Form</h1>
    <form method="/PhpAndMySQL" action="post">
        <p><label>Location:</label></p>
        <input type="text" name="location" value="<? if (isset($_POST['location'])) echo $_POST['location']; ?>" />
        <p><label>Category:</label></p>
        <select name="">
            <option value="Please select">Please select</option>
            <option value="Hotel">Hotel</option>
            <option value="Guest House">Guest House</option>
            <option value="Rental">Rental</option>
        </select>
        <input type="submit" value="Submit" name="" />
    </form>
    <?php
    //1. Check the form and complete as necessary
    //2. Add code to collect data from the two form objects and echo back data collected
    //3. Use isset() function to stop code being processed without form being submitted
    //4. Add code to check data has been entered into text box when form submitted and
    // feedback a message to user if box is empty
    //5. Extend condition to check input to include a check to ensure a category has been
    // Selected before proceeding
    //6. sanitize the string entered into the text box using the filter_var() function
    //7. set value of the text box so the user entry persists when an error is found
    ?>
</body>

</html>