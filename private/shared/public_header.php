<!doctype html>

<html lang="en">
  <head>
    <title>Data-API <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/public.css'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>

    <header>
      <h1>
        <a href="<?php echo url_for('/index.php'); ?>">
          <img class="bike-icon" src="<?php echo url_for('/images/bglasses.jpeg') ?>" /><br />
          Data-API
        </a>
      </h1>
        <div id="menu">
        <ul>
          <li><a href="<?php echo url_for('/item.php'); ?>">View Our Inventory</a></li>
          <li><a href="<?php echo url_for('/about.php'); ?>">About Us</a></li>
          <li><a href="<?php echo url_for('/staff/index.php'); ?>">Admins</a></li>
        </ul>
</div>
    </header>
