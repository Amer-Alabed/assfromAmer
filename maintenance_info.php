<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array();

    if (empty($_POST["maintenance-date"])) {
        $errors[] = "Maintenance date is required";
    } else {
        $maintenance_date = $_POST["maintenance-date"];
    }

    if (empty($_POST["impact"])) {
        $errors[] = "Impact on restaurant is required";
    } else {
        $impact = $_POST["impact"];
    }

    $quota_price = isset($_POST["quota-price"]) ? $_POST["quota-price"] : '';


    if (!empty($errors)) {
        header("Location: index.php?error=" . urlencode(implode("<br>", $errors)));
        exit();
    } else {
        echo "Maintenance Date: " . $maintenance_date . "<br>";
        echo "Impact on Restaurant: " . $impact . "<br>";
        echo "Quota/Price: " . $quota_price . "<br>";
        if (!empty($_POST["comments"])) {
            echo "Comments: " . $_POST["comments"] . "<br>";
        }
    }
} else {
    header("Location: index.php");
    exit();
}
?>
