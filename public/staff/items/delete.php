<?php

require_once('../../../private/initialize.php');

require_login();

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/items/index.php'));
}
$id = $_GET['id'];
$item = Item::find_by_id($id);
if($item == false) {
  redirect_to(url_for('/staff/items/index.php'));
}

if(is_post_request()) {

  // Delete item
  $result = $item->delete();
  $_SESSION['message'] = 'The item was deleted successfully.';
  redirect_to(url_for('/staff/items/index.php'));

} else {
  // Display form
}

?>

<?php $page_title = 'Delete Bicycle'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/items/index.php'); ?>">&laquo; Back to List</a>

  <div class="item delete">
    <h1>Delete item</h1>
    <p>Are you sure you want to delete this item?</p>
    <p class="item"><?php echo h($item->name()); ?></p>

    <form action="<?php echo url_for('/staff/items/delete.php?id=' . h(u($id))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete item" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
