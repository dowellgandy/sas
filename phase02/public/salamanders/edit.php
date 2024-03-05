<?php require_once('../../private/initialize.php'); 

if(!isset($_GET['id'])) {
    redirect_to(url_for('salamanders/'));
}
$id = $_GET['id'] ?? '';
$salamander = '';
$position = '';
$visible = '';

if (is_post_request()) {
    $salamander = $_POST['salamander'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';

    echo "Form Parameters<br>";
    echo "Salamander: " . $salamander . "<br>";
    echo "Position: " . $position . "<br>";
    echo "Visible: " . $visible . "<br>";
}

$page_title = 'Create Salamander';
include(SHARED_PATH . '/salamander-header.php');
?>

<div id="main">
    <form action=<?php echo url_for("salamanders/edit.php?id=" . h(u($id)));?> method="post">
        <label for="salamander">Salamander:</label>
        <input type="text" id="salamander" name="salamander" value="<?php echo $salamander;?>"><br>

        <label for="position">Position:</label>
        <select id="position" name="position">
            <option value="1">1</option>
        </select><br>

        <label for="visible">Visible: </label>
        <input id="visible" type="hidden" name="visible" value="0">
        <input id="visible" type="checkbox" name="visible" value="1"><br>

        <input type="submit" value="Create Salamander">
    </form>
    <a href="<?php echo url_for('/salamanders/index.php');?>">Back to Salamanders</a>
</div>
