<?php require_once('../../../private/initialize.php');

require_login();
?>

<?php
  
// Find all items;
$items = Item::find_all();
  
?>
<?php $page_title = 'items'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="items listing">
    <h1>items</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/items/new.php'); ?>">Add Item</a>
    </div>

  	<table class="list">
      <tr>
        <th>ID</th>
        <th>Item Name</th>
        <th>Description</th>
        <th>Year</th>
        <th>Price</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php foreach($items as $item) { ?>
        <tr>
          <td><?php echo h($item->id); ?></td>
          <td><?php echo h($item->item_name); ?></td>
          <td><?php echo h($item->description); ?></td>
          <td><?php echo h($item->year); ?></td>
          <td><?php echo h($item->price); ?></td>
          <td><a class="action" href="<?php echo url_for('/staff/items/show.php?id=' . h(u($item->id))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/items/edit.php?id=' . h(u($item->id))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/items/delete.php?id=' . h(u($item->id))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
