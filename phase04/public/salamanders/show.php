<?php require_once('../../private/initialize.php');

$id = $_GET['id'] ?? '1'; // PHP > 7.0
$page_title = 'View Salamander';
include(SHARED_PATH . '/salamander-header.php');

$salamander = find_salamander_by_id($id);
?>


<a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>
<h1>Salamander Details</h1>
<p>
    <strong>ID: </strong>
    <?php echo h($salamander['id']); ?>
</p>
<p>
    <strong>Name: </strong>
    <?php echo h($salamander['name']); ?>
</p>
<p>
    <strong>Habitat:</strong><br>
    <?php echo h($salamander['habitat']); ?>
</p>
<p>
    <strong>Description:</strong><br>
    <?php echo h($salamander['description']); ?>
</p>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
