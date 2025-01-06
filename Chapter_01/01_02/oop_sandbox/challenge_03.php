<?php

class Bicycle
{
    private $brand;
    private $model;
    protected $wheels = 2;
    private $year;
    //private $description;
    private $weight_lbs  = 0.00;
    private $weight_kg = 0.00;

    public function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function get_name()
    {
        return $this->brand . ", " . $this->model . ", "  . $this->year . "<br>";
    }


    public function set_weight_lbs(float $kg_weight)
    {
        $this->weight_lbs = $kg_weight * 2.2046226218;
    }

    public function set_weight_kg(float $lbs_weight)
    {
        $this->weight_kg = $lbs_weight / 2.2046226218;
    }

    public function get_weight_kg()
    {
        return $this->weight_kg . "kg";
    }

    public function get_weight_lbs()
    {
        return $this->weight_lbs . "lbs";
    }

    public function wheel_details()
    {
        $wheel_string = $this->wheels === 1 ? " 1 wheel." : " {$this->wheels} wheels.";
        return "it has" . $wheel_string;
    }
}


class Unicycle extends Bicycle
{
    protected $wheels = 1;
}


$cycle1 = new Unicycle("Posche", "X112", 2070);
$cycle1->set_weight_kg(32.77);
$cycle1->set_weight_lbs((float) $cycle1->get_weight_kg());

echo "Cycle1:<br>(Brand, Model, Year) =  {$cycle1->get_name()}";
echo "Weight in lbs = {$cycle1->get_weight_lbs()}.<br> Weight in kg = {$cycle1->get_weight_kg()} <br>";
echo "Wheel condition = {$cycle1->wheel_details()}";

// Cycle 2
$cycle2 = new Bicycle("BMX", "R7", 2024);
$cycle2->set_weight_kg(60.77);
$cycle2->set_weight_lbs((float) $cycle2->get_weight_kg());
echo "<br>Cycle2:<br>(Brand, Model, Year) =  {$cycle2->get_name()}";
echo "Weight in lbs = {$cycle2->get_weight_lbs()}.<br> Weight in kg = {$cycle2->get_weight_kg()} <br>";
echo "Wheel condition = {$cycle2->wheel_details()}";
