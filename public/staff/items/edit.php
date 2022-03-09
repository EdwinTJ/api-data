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

  // Save record using post parameters
  $args = $_POST['item'];
  $item->merge_attributes($args);
  $result = $item->save();

  if($result === true) {
    $_SESSION['message'] = 'The item was updated successfully.';
    redirect_to(url_for('/staff/items/show.php?id=' . $id));
  } else {
    // show errors
  }

} else {

  // display the form

}

?>

<?php $page_title = 'Edit Item'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/items/index.php'); ?>">&laquo; Back to List</a>

  <div class="Item edit">
    <h1>Edit Item</h1>

    <?php echo display_errors($item->errors); ?>

    <form action="<?php echo url_for('/staff/items/edit.php?id=' . h(u($id))); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Edit Item" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
