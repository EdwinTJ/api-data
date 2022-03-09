<?php require_once('../../../private/initialize.php'); 

require_login();
?>

<?php

$id = $_GET['id'] ?? '1';

$item = Item::find_by_id($id);

?>

<?php $page_title = 'Show item: ' . h($item->name()); ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/items/index.php'); ?>">&laquo; Back to List</a>

  <div class="item show">

    <h1>item: <?php echo h($item->name()); ?></h1>

    <div class="attributes">
      <dl>
        <dt>Item Name</dt>
        <dd><?php echo h($item->item_name); ?></dd>
      </dl>
      <dl>
        <dt>description</dt>
        <dd><?php echo h($item->description); ?></dd>
      </dl>
      <dl>
        <dt>Year</dt>
        <dd><?php echo h($item->year); ?></dd>
      </dl>
    </div>
    <dl>
        <dt>price</dt>
        <dd><?php echo h($item->price); ?></dd>
      </dl>
    </div>
  </div>

</div>
