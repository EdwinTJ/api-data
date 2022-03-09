<?php

class Item extends DatabaseObject {

  static protected $table_name = 'items';
  static protected $db_columns = ['id', 'item_name', 'description', 'year', 'price'];

  public $id;
  public $item_name;
  public $description;
  public $year;
  public $price;


  public function __construct($args=[]) {
    //$this->brand = isset($args['brand']) ? $args['brand'] : '';
    $this->item_name = $args['item_name'] ?? '';
    $this->description = $args['description'] ?? '';
    $this->year = $args['year'] ?? '';
    $this->price = $args['price'] ?? 0;

  }

  public function name() {
    return "{$this->item_name} {$this->description} {$this->year}";
  }

  protected function validate() {
    $this->errors = [];

    if(is_blank($this->item_name)) {
      $this->errors[] = "item_name cannot be blank.";
    }
    if(is_blank($this->description)) {
      $this->errors[] = "description cannot be blank.";
    }
    return $this->errors;
  }


}

?>
