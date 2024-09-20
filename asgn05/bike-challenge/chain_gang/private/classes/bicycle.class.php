<?php

class Bicycle {

  public $brand;
  public $model;
  public $year;
  public $category;
  public $color;
  public $description;
  public $gender;
  public $price;
  protected $weightKg;
  protected $conditionID;

  public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];
  public const GENDERS = ['Mens', 'Womens', 'Unisex'];
  protected const CONDITION_OPTIONS = [
    1 => 'Beat up',
    2 => 'Decent',
    3 => 'Good',
    4 => 'Great',
    5 => 'Like New'
  ];

  public function __construct($arguments=[]){
    $this->brand = $arguments['brand'] ?? '';
    $this->model = $arguments['model'] ?? '';
    $this->year = $arguments['year'] ?? '';
    $this->category = $arguments['category'] ?? '';
    $this->color = $arguments['color'] ?? '';
    $this->description = $arguments['description'] ?? '';
    $this->gender = $arguments['gender'] ?? '';
    $this->price = $arguments['price'] ?? 0;
    $this->weightKg = $arguments['weightKg'] ?? 0.0;
    $this->conditionID = $arguments['conditionID'] ?? 3;
  }

  public function weight_kg() {
    return number_format($this->weightKg, 2) . ' kg';
  }

  public function set_weight_value($value) {
    $this->weightKg = floatval($value);
  }

  public function weight_lbs() {
    $weightLbs = floatval($this->weightKg) * 2.2046226218;
    return number_format($weightLbs , 2) . ' lbs ';
  }

  public function set_weight_lbs($value) {
    $this->weightKg = floatval($value) / 2.2046226218;
  }


}


?>