<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Transition for Restaurant Chain</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        button[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="container">
    <fieldset>
        <legend>Basic Information</legend>
        <form id="basic-info-form" action="basic_info.php" method="post">
            <label for="restaurantName">Restaurant Name: </label>
            <input type="text" id="restaurantName" name="restaurantName" required><br>

            <label for="address">Address: </label>
            <input type="text" id="address" name="address" required><br>

            <label for="phoneNumber">Phone Number: </label>
            <input type="tel" id="phoneNumber" name="phoneNumber" pattern="[0-9]{10}" required><br>

            <button type="submit">Submit</button>
        </form>
    </fieldset>

    <fieldset>
        <legend>Menu Information</legend>
        <form id="menu-info-form" action="menu_info.php" method="post">
            <label for="menu-items">Select Menu Items:</label>
            <select id="menu-items" name="menu-items[]" multiple>
                <option value="item1">Item 1</option>
                <option value="item2">Item 2</option>
                <option value="item3">Item 3</option>
            </select>

            <label for="serving-times">Serving Times:</label>
            <input type="time" id="serving-times" name="serving-times[]" required><br>

            <button type="submit">Submit</button>
        </form>
    </fieldset>

    <fieldset>
        <legend>Maintenance History</legend>
        <form id="maintenance-info-form" action="maintenance_info.php" method="post">
            <label for="maintenance-date">Maintenance Date:</label>
            <input type="date" id="maintenance-date" name="maintenance-date" required><br>

            <label>Impact on Restaurant:</label><br>
            <input type="radio" id="complete-shutdown" name="impact" value="Complete shutdown" required>
            <label for="complete-shutdown">Complete Shutdown</label><br>
            <input type="radio" id="partial-shutdown" name="impact" value="Partial shutdown">
            <label for="partial-shutdown">Partial Shutdown</label><br>
            <input type="radio" id="normal-operations" name="impact" value="Normal operations">
            <label for="normal-operations">Normal Operations</label><br>

            <label for="quota-price">Quota/Price:</label>
            <input type="text" id="quota-price" name="quota-price"><br>

            <label for="comments">Comments:</label>
            <textarea id="comments" name="comments"></textarea><br>

            <button type="submit">Submit</button>
        </form>
    </fieldset>
</div>
<script src="js/scripts.js"></script>

</body>
</html>
