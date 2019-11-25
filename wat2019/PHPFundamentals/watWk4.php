<DOCTYPE html>
    <html lang="en">

    <head>
        <title>Web Applications and Technologies</title>
        <link type="text/css" rel="stylesheet" href="main.css" />
    </head>

    <body>
        <header>
            <h1>Dipesh B.C. C7202612</h1>
        </header>

        <section id="container">
            <h1>Further Fundamentals of PHP</h1>
            <?php
            echo '<h3>Arrays</h3>';
            echo '<h4>Simple Arrays</h4>';

            // declare and store value in array
            $products = ['t-shirt', 'cap', 'mug'];
            print_r($products);

            echo '<br/>';

            // overwrite value in index 1
            $products[1] = 'shirt';
            print_r($products);

            // adding items in array
            $products[] = 'skirt';

            echo '<p>Items in my products array</p>';
            echo '<p>The item at index[2] is: ' . $products[2] . '</p>';
            echo '<p>The item at index[3] is: ' . $products[3] . '</p>';

            echo '<h4>Associative Arrays</h4>';
            $customer = ['CustID' => 12, 'CustName' => 'Sarah', 'CustAge' => 23, 'CustGender' => 'F'];
            print_r($customer);

            echo '<br/>';

            $customer['CustAge'] = 24;
            $customer['CustEmail'] = 'sarah@gmail.com';
            print_r($customer);

            echo '<p>Items in my <i>customer</i> array</p>';
            echo '<p>The item at index[CustName] is: ' . $customer['CustName'] . '</p>';
            echo '<p>The item at index[CustEmail] is: ' . $customer['CustEmail'] . '</p>';

            echo '<h4>Multi-Dimensional Arrays</h4>';
            $stock = [
                'id1' =>
                [
                    'description' => 't-shirt', 'price' => 1.99, 'stock' => 100, 'colour' => ['blue', 'green', 'red']
                ],
                'id2' => [
                    'description' => 'cap', 'price' => 4.99, 'stock' => 50, 'colour' => ['blue', 'black', 'grey']
                ],
                'id3' => [
                    'description' => 'mug', 'price' => 6.99, 'stock' => 30, 'colour' => ['yellow', 'green', 'pink']
                ]
            ];
            print_r($stock);

            echo '</br></br>';

            echo 'This is my order:<br/>';
            echo $stock['id1']['colour'][1] . ' ' . $stock['id1']['description'] . '<br/>';
            echo 'Price: £' . $stock['id1']['price'] . '<br/>';
            echo $stock['id2']['colour'][2] . ' ' . $stock['id2']['description'] . '<br/>';
            echo 'Price: £' . $stock['id2']['price'] . '<br/>';

            echo '<h3>Loops</h3>';
            echo '<h4>While Loop</h4>';
            $counter = 1;

            while ($counter < 6) {
                echo 'count = ' . $counter . '</br>';
                ++$counter;
            }

            echo '</br>';

            $shirt_price = 9.99;
            $counter = 1;

            while ($counter <= 10) {
                $total = $counter * $shirt_price;
                echo $counter . ' - £' . $total . '</br>';
                ++$counter;
            }

            echo '</br>';
            echo '<style>  table, th, td {border: 1px solid black;} </style>';
            echo '<Table>';
            echo '<tr>';
            echo '<th>Quantity</th><th>Price</th>';
            echo '</tr>';
            $counter = 1;

            while ($counter <= 10) {
                $total = $counter * $shirt_price;
                echo '<tr>';
                echo '<td>' . $counter . '</td><td>£ ' . $total . '</td>';
                echo '</tr>';
                ++$counter;
            }
            echo '</table>';

            echo '<h3>For Loops</h3>';
            $names = ['Dipesh', 'Anish', 'DK', 'Pansari', 'Kads'];

            for ($i = 0; $i < 5; ++$i) {
                echo $names[$i] . '<br/>';
            }

            echo '<h4>Foreach Loops</h4>';
            $names = ['Dipesh' => 'C7202612', 'Anish' => 'C7202613', 'DK' => 'C7202614', 'Pansari' => 'C7202615', 'Kads' => 'C7202616'];
            $counter = 0;

            foreach ($names as $name) {
                echo 'Name: ' . array_search($name, $names) . ': ' . $name . '</br>';
            }

            echo '</br>';

            $city = ['Peter' => 'LEEDS', 'Kat' => 'bradford', 'Laura' => 'wakeField'];

            print_r($city);

            echo '</br>';

            foreach ($city as $city_name) {
                $key = array_search($city_name, $city);
                $city[$key] =  ucfirst(strtolower($city_name));
            }

            print_r($city);

            // some extra challenges
            echo '<h3>Some Useful Functions.</h3>';
            $password = '<script>alert("You have been hacked")</script>';
            $password = trim($password);
            $password = htmlentities($password);
            $password = 'password';
            $length = strlen($password);

            echo '<p>Password is: ' . $password . '</p>';

            if (isset($password) && !empty($password)) {
                if ($length >= 6 && $length <= 8)
                    if (is_numeric($password)) {
                        echo '<p>Password cannot be a number</p>';
                    } else {
                        echo '<p>Password OK.</p>';
                        // Set a md5 hash of the password
                        $password = md5('password');
                    }
            } else {
                echo '<p>Please enter a password</p>';
            }

            echo $password;



            ?>
        </section>
        <footer>
            <small> <a href="../watIndex.html">Home</a></small>
        </footer>
    </body>

    </html>