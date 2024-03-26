<?php

require_once('../../private/initialize.php');
include(SHARED_PATH . '/salamander-header.php'); 

echo "<h1>Edit Salamander</h1>";

if(is_get_request()) {
    $id = $_GET['id'] ?? '1';
}
elseif(is_post_request()) {
    $id = $_POST['id'];
}

if(is_post_request()) {
    $salamander = [];
    $salamander['id'] = $id;
    $salamander['name'] = $_POST['name'];
    $salamander['habitat'] = $_POST['habitat'];
    $salamander['description'] = $_POST['description'];

    $sql = "UPDATE salamander SET ";
    $sql .= "name='" . $salamander['name'] . "', ";
    $sql .= "habitat='" . $salamander['habitat'] . "', ";
    $sql .= "description='" . $salamander['description'] . "' ";
    $sql .= "WHERE id='" . $salamander['id'] ."' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);
    if($result) {
        redirect_to((url_for('salamanders/show.php?id=' . $id)));
    }
    else {
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }

}
else {
    $salamander = find_salamander_by_id($id);
}

?>

<form action="<?php echo url_for('salamanders/edit.php') ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <p>
        <label for="name">Salamander Name:</label><br>
        <input type="text" name="name" value="<?php echo h($salamander['name']); ?>">
    </p>
    <p>
        <label for="habitat">Habitat:</label><br>
        <textarea rows="5" cols="50" name="habitat"><?php echo h($salamander['habitat']); ?></textarea>
    </p>
    <p>
        <label for="description">Description:</label><br>
        <textarea rows="8" cols="50" name="description"><?php echo h($salamander['description']); ?></textarea>
    </p>
    <p>
        <input type="submit" value="Edit Salamander">
    </p>
</form>

<?php
include(SHARED_PATH . '/salamander-footer.php'); ?>
