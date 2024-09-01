<?php 

class Clothing {
  public $forLegs = false;
  public $forArms = false;
  public $isAccessory = false;
  public $material;
  public $type; 

  public function accessory($isAccessory){
    if ($isAccessory === true){
      return 'This is an accessory to an outfit.';
    }
    else {
      return 'This is not an accessory, it is part of an outfit.';
    }
  }

}

class Shirt extends Clothing {
  public $forArms = true;
  public $material = 'Blend';
}

class tShirt extends Shirt {
   public $material = 'Cotton';
}

class Pant extends Clothing {
  public $forLegs = true;
  public $material = 'Leather';
}

class Jean extends Pant {
  public $material = 'denim';
  public $outfitType = 'casual';
}

class Skirt extends Pant {
  protected $pantLegs = false;

}

class Necklace extends Clothing {
  public $isAccessory = true;
  
}