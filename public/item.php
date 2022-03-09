<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/about.jpeg') ?>" />
      <h2>Our Inventory of Used Item</h2>
      <p>Choose these books you love.</p>
      <p>We will deliver it to your door and let you try it before you buy it.</p>
    </div>

    <table id="inventory">
    <tr>
        <th>ID</th>
        <th>Item Name</th>
        <th>Description</th>
        <th>Year</th>
        <th>Price</th>
      </tr>
<?php

$items = Item::find_all();

?>
      <?php foreach($items as $item) { ?>
        <tr>
          <td><?php echo h($item->id); ?></td>
          <td><?php echo h($item->item_name); ?></td>
          <td><?php echo h($item->description); ?></td>
          <td><?php echo h($item->year); ?></td>
          <td><?php echo h($item->price); ?></td>
    	  </tr>
      <?php } ?>

    </table>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
