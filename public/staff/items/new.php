<?php

require_once('../../../private/initialize.php');

require_login();

if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['item'];
  $item = new Item($args);
  $result = $item->save();

  if($result === true) {
    $new_id = $item->id;
    $_SESSION['message'] = 'The item was created successfully.';
    redirect_to(url_for('/staff/items/show.php?id=' . $new_id));
  } else {
    // show errors
  }

} else {
  // display the form
  $item = new Item;
}

?>

<?php $page_title = 'Create item'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/items/index.php'); ?>">&laquo; Back to List</a>

  <div class="item new">
    <h1>Create item</h1>

    <?php echo display_errors($item->errors); ?>

    <form action="<?php echo url_for('/staff/items/new.php'); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Create item" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
