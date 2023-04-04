<?php
require_once __DIR__ . "/Category.php";

class Product {
  protected $name;
  protected $price;
  protected $image;
  protected $category;
  

  public function __construct($name, $price, $image, $category)
  {
    try {
      if(!$this->setName($name)) throw new Exception("Invalid argument for 'name' attribute in Product Class");
      if(!$this->setPrice($price)) throw new Exception("Invalid argument for 'price' attribute in Product Class");
      if(!$this->setImage($image)) throw new Exception("Invalid argument for 'image' attribute in Product Class");
      if(!$this->setCategory($category)) throw new Exception("Invalid argument for 'category' attribute in Product Class");
    } catch(Exception $e) {
      $error_message = $e->getMessage();
      include __DIR__ . "/../error_page.php";
      exit;
    }
  }

  public function setName($name) {
    if(!is_string($name) || $name === "") return false;
    $this->name = $name;
    return $this;
  }

  public function getName() {
    return $this->name;
  }

  public function setPrice($price) {
    if(!is_float($price)) return false;
    $this->price = $price;
    return $this;
  }
 

  public function getPrice() {
    return $this->price;
  }

  public function setImage($image) {
    if(!is_string($image)) return false;
    $this->image = $image;
    return $this; 
  }

  public function getImage() {
    return $this->image;
  }

  public function setCategory($category) {
    if(!$category instanceof category) return false;
    $this->category = $category;
    return $this;
  }

  public function getCategory() {
    return $this->category;
  }
}