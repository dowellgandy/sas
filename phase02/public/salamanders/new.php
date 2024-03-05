<?php require_once('../../private/initialize.php'); 

$test = $_GET['test'] ?? '';

if ($test == '404') {
    error_404();
}
elseif ($test == '500') {
    error_500();
}
elseif ($test == 'redirect') {
    redirect_to('index.php');
}

$page_title = 'Create Salamander';
include(SHARED_PATH . '/salamander-header.php');
?>

<div id="main">
    <form action=<?php echo url_for("/salamanders/create.php")?> method="post">
        <label for="salamander">Salamander:</label>
        <input type="text" id="salamander" name="salamander" value=""><br>

        <label for="position">Position:</label>
        <select id="position" name="position">
            <option value="1">1</option>
        </select><br>

        <label for="visible">Visible: </label>
        <input id="visible" type="hidden" name="visible" value="0">
        <input id="visible" type="checkbox" name="visible" value="1"><br>

        <input type="submit" value="Create Salamander">
    </form>
    <a href="<?php echo url_for('salamanders/');?>">Back to Salamanders</a>
</div>
