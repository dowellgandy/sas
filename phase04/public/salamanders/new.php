<?php require_once('../../private/initialize.php');
include(SHARED_PATH . '/salamander-header.php');
echo "<h1>Create a New Salamander</h1>";
?>
<form action="<?php echo url_for('salamanders/create.php') ?>" method="post">
    <p>
        <label for="name">Salamander Name:</label><br>
        <input type="text" name="name" value="">
    </p>
    <p>
        <label for="habitat">Habitat:</label><br>
        <textarea rows="5" cols="50" name="habitat"></textarea>
    </p>
    <p>
        <label for="description">Description:</label><br>
        <textarea rows="8" cols="50" name="description"></textarea>
    </p>
    <p>
        <input type="submit" value="Create Salamander">
    </p>
</form>

<?php
include(SHARED_PATH . '/salamander-footer.php'); ?>
