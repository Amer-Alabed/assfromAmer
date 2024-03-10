<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array();

    if (empty($_POST["restaurantName"])) {
        $errors[] = "Restaurant name is required";
    } else {
        $restaurant_name = test_input($_POST["restaurantName"]);
    }

    if (empty($_POST["phoneNumber"])) {
        $errors[] = "Phone number is required";
    } else {
        $phone_number = test_input($_POST["phoneNumber"]);
    }

    if (empty($_POST["address"])) {
        $errors[] = "Address is required";
    } else {
        $address = test_input($_POST["address"]);
    }

    if (!empty($errors)) {
        header("Location: index.php?error=" . urlencode(implode("<br>", $errors)));
        exit();
    } else {
        $restaurant_name = $_POST["restaurantName"];
        $phone_number = $_POST["phoneNumber"];
        $street_name = $_POST["address"];

        header("Location: success.php");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
