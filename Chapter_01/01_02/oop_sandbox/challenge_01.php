<?php


class Bicycle{
     public $brand;
     public $model;
     public $year;
     public $description;
     public $weight_kg;


     function get_name(){
        return $this->brand. " " . $this->model . " "  . $this->year . "<br>";
     }


     function weight_lbs(float $kg_weight){
        $weight_lbs = $kg_weight * 2.2046226218;
        return $weight_lbs;
     }

     function set_weight_lbs(float $lbs_weight){
        $this->weight_kg = $lbs_weight/2.2046226218;
        return $this->weight_kg;
     }
}


$bike1 = new Bicycle();
$bike2 = new Bicycle();
$bike3 = new Bicycle();

$weight_lbs = 0.00;

$bike1->brand = "BTM";
$bike1->model = "M4";
$bike1->year = 2024;
echo "Bike 1: " . $bike1->get_name();
$weight_lbs =  round ( $bike1->weight_lbs(12.4));
echo "Bike 1 weight in lbs: {$weight_lbs}lbs <br>";
echo "Bike 1 weight in kg: " . round ( $bike1->set_weight_lbs($weight_lbs)) . "kg <br>" . "<br>";

$bike2->brand = "MTB";
$bike2->model = "M17";
$bike2->year = 2025;
echo "Bike 2: " . $bike2->get_name();
$weight_lbs =  round ( $bike2->weight_lbs(20.7));
echo "Bike 2 weight in lbs: {$weight_lbs}lbs<br>";
echo "Bike 2 weight in kg: " . round ( $bike2->set_weight_lbs($weight_lbs)) . "kg <br>" . "<br>";

$bike3->brand = "Sprinter";
$bike3->model = "5";
$bike3->year = 2016;
echo "Bike 3: " . $bike3->get_name();
$weight_lbs = round ( $bike3->weight_lbs(17.3)); 
echo "Bike 3 weight in lbs:  {$weight_lbs}lbs <br>";
echo "Bike 3 weight in kg: " . round ( $bike3->set_weight_lbs($weight_lbs)) . "kg <br>";
