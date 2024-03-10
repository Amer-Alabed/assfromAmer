<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array();

    if (empty($_POST["menu-items"])) {
        $errors[] = "At least one menu item must be selected";
    } else {
        $menu_items = $_POST["menu-items"];
    }

    if (empty($_POST["serving-times"])) {
        $errors[] = "Serving times are required";
    } else {
        $serving_times = $_POST["serving-times"];
    }

    if (!empty($errors)) {
        header("Location: index.php?error=" . urlencode(implode("<br>", $errors)));
        exit();
    } else {
        echo "Selected Menu Items:<br>";
        foreach ($menu_items as $item) {
            echo "- $item<br>";
        }
        echo "Serving Times: " . implode(", ", $serving_times) . "<br>";
    }
} else {
    header("Location: index.php");
    exit();
}
?>
