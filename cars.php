<?php
   
   $car_orders[0]['model'] = 'taurus';
   $car_orders[0]['engine'] = 'V6';
   $car_orders[0]['color'] = 'blue';
   
   $car_orders[1]['model'] = 'mustang';
   $car_orders[1]['engine'] = 'V6';
   $car_orders[1]['color'] = 'yellow';
   
   $car_orders[2]['model'] = 'focus';
   $car_orders[2]['engine'] = 'V6';
   $car_orders[2]['color'] = 'silver';
   
   print_r($car_orders[$_GET['car_order']]);
   
   if(empty($_GET)) {
   foreach($car_orders as $car_order) {
   	$i++; //for every order 1,2,3
   	$car_order_num = $i - 1;
    foreach($car_order as $key => $value) {
   	  echo $key . ': ' . $value . "<br>\n";
		
	  }
	echo '<a href=' . '"http://web.njit.edu/~ko45/is218/cars.php?car_order=' . $car_order_num . '"' . '>Car Order ' . $i . ' </a>';
	//echo '<a href=' . '#' . '>Car Order ' . $car_order['model'] . ' </a>'
	echo '</p>';
    }
   }
	
    $car_order = $car_orders[$_GET['car_order']];
	
	 foreach ($car_order as $key => $value) {
		 echo $key . ': ' . $value . "<br>/n";
	 }
	
    abstract class car {
    protected $engine;
    protected $wheels = 4;
    protected $doors;
    protected $length;
    protected $weight;
    protected $color;
  
    public function setColor($color) {
      $this->color = $color;
    }
    public function setEngine(engine $engine) {
      $this->engine = $engine;
    }
  }
 
  abstract class ford extends car {}
  class taurus extends ford {
  
     public function __construct() {
       $this->doors = '4';
       $this->length = '2000cm';
       $this->weight = '1700kg';
       
       $engine = new engine;

       $this->setEngine($engine);
     
     }
    
  }

  class engine {}


?>