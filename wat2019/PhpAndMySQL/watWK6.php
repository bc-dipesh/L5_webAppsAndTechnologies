<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Form</title>
</head>

<body>
    <section>
        <form method="post" action="insertRecord.php">
            <fieldset>
                <legend>Enter Customer Details</legend>
                <label for="firstName">First Name:</label>
                <input id="firstName" type="text" name="FirstName">
                <br /><br />
                <label for="secondName">Second Name:</label>
                <input id="secondName" type="text" name="SecondName">
                <br /><br />
                <label for="email">Email:</label>
                <input id="email" type="text" name="Email">
                <br /><br />
                <label for="password">Password:</label>
                <input type="password" id="password" name="Password">
                <br /><br />
                <label for="gender">Gender:</label>
                <select name="Gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <br /><br />
                <label for="age">Age:</label>
                <input type="text" id="age" name="Age">
                <br /><br />
                <input type="submit" value="Submit" name="submitForm">
            </fieldset>
        </form>
        <?php include 'selectRecord.php'; ?>
    </section>
</body>

</html>