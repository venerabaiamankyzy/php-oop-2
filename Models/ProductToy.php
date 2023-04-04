<?php 

require_once __DIR__ . "/Product.php";

class ProductToy extends Product {
  public $material;

  public function __construct(
    string $name,
    float $price,
    string $image,
    Category $category,
    string $material
  )
  {
    parent::__construct($name, $price, $image, $category);

    $this->material = $material;
  }

  public function getTextClassname() {
    return "Giocattolo";
  }
}