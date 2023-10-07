<?php
require_once('database.php');
$database = new Database();

    if (isset($_POST) && !empty($_POST)) {
        $database->insertData($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--Metadata-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pizza Place">
    <meta name=" robots" content=" noindex, nofollow">
    <!--Linking your CSS file-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Linking Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <!-- Title for the page -->
    <title>Pizza Order Form</title>
</head>

<body>
<!-- Header Section -->
<header>
    <h1>Pizza Place</h1>
    <h2>Order Your Pizza</h2>
</header>

<main>
    <!-- Pizza Order Form -->
    <div id="order-form">
        <form action="#" method="post">
            <!-- Name Input -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <!-- Email Input -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <!-- Phone Input -->
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <!-- Pizza Size Selection -->
            <label for="small">Small</label>
            <input type="radio" id="small" name="size" value="small" required>
            <label for="medium">Medium</label>
            <input type="radio" id="medium" name="size" value="medium" required>
            <label for="large">Large</label>
            <input type="radio" id="large" name="size" value="large" required>


            <!-- Toppings Selection -->
            <label for="pepperoni">Choose Toppings:</label>
            <div>
                <input type="checkbox" id="pepperoni" name="toppings[]" value="pepperoni">
                <label for="pepperoni">Pepperoni</label>
            </div>
            <div>
                <input type="checkbox" id="mushrooms" name="toppings[]" value="mushrooms">
                <label for="mushrooms">Mushrooms</label>
            </div>
            <div>
                <input type="checkbox" id="onions" name="toppings[]" value="onions">
                <label for="onions">Onions</label>
            </div>
            <div>
                <input type="checkbox" id="redpepper" name="toppings[]" value="redpepper">
                <label for="redpepper">Red Pepper</label>
            </div>


            <!-- Crust Selection -->
            <label for="crust">Choose Crust:</label>
            <select id="crust" name="crust" required>
                <option value="" selected disabled>Select Crust</option>
                <option value="thin">Thin Crust</option>
                <option value="thick">Thick Crust</option>
                <option value="stuffed">Stuffed Crust</option>
            </select>

            <!-- Submit Button -->
            <button type="submit">Place Order</button>
        </form>
    </div>
</main>

<!-- Footer Section -->
<footer>
    <p>&copy; 2023 Pizza Place. All rights reserved.</p>
</footer>
</body>

</html>
