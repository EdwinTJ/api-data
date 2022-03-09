<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
require_login();

if(!isset($item)) {
  redirect_to(url_for('/staff/items/index.php'));
}
?>

<dl>
  <dt>item_name</dt>
  <dd><input type="text" name="item[item_name]" value="<?php echo h($item->item_name); ?>" /></dd>
</dl>

<dl>
  <dt>Description</dt>
  <dd><input type="text" name="item[description]" value="<?php echo h($item->description); ?>" /></dd>
</dl>

<dl>
  <dt>Year</dt>
  <dd>
    <select name="item[year]">
      <option value=""></option>
    <?php $this_year = idate('Y') ?>
    <?php for($year=$this_year-20; $year <= $this_year; $year++) { ?>
      <option value="<?php echo $year; ?>" <?php if($item->year == $year) { echo 'selected'; } ?>><?php echo $year; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Price</dt>
  <dd>$ <input type="text" name="item[price]" size="18" value="<?php echo h($item->price); ?>" /></dd>
</dl>
