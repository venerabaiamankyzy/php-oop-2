<?php 
class Category {
  protected $categoryName;
  public $CategoryIcon;

  private static $accepted_categories = [
    "Cane",
    "Gatto"
  ];

  public function __construct(
    string $_categoryName,
    string $_CategoryIcon
    )
  {
    $this-> categoryName = $_categoryName;
    $this-> CategoryIcon = $_CategoryIcon;
  }

  public function setName($_categoryName) {
    if(!is_string($_categoryName) || !in_array($_categoryName, self::$accepted_categories)) return false;
    $this->categoryName = $_categoryName;
    return $this;
  }

  public function getName() {
    return $this->categoryName;
  }
}