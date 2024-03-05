<?php require_once('../../private/initialize.php'); 

if (is_post_request()) {
    $salamander = $_POST['salamander'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';

    echo "Form Parameters<br>";
    echo "Salamander: " . $salamander . "<br>";
    echo "Position: " . $position . "<br>";
    echo "Visible: " . $visible . "<br>";
}
else {
    redirect_to(url_for('/salamanders/new.php'));
}
