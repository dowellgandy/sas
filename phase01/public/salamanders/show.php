<?php require_once('../../private/initialize.php'); 

$id = $_GET['id'] ?? '1';

$pageTitle = 'Salamander Details';

include(SHARED_PATH . '/salamander-header.php') ;

?>

<h2>Salamander Details</h2>
<p>Page ID: <?php echo h($id); ?></p>
<p><a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>

<?php include(SHARED_PATH . '/salamander-footer.php') ; ?>
