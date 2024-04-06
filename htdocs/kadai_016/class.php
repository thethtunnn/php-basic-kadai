<?php

class Food {
    public $name;
    public $price;

    // Constructor
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // Method to show price
    public function show_price() {
        echo "Price of {$this->name}: {$this->price}\n";
    }
}

class Animal {
    private $name;
    private $height;
    private $weight;

    // Constructor
    public function __construct(string $name,int $height,int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // Method to show height
    public function show_height() {
        echo "Height of {$this->name}: {$this->height} \n";
    }
}

// Create instances
$food_instance = new Food("Pizza", 250);
$animal_instance = new Animal("Lion", 60, 200);

// Access and execute methods
echo "Executing method in Food class:\n";
// $food_instance->show_price();
print_r($food_instance);
echo "<br>";

echo "\nExecuting method in Animal class:\n";
// $animal_instance->show_height();
print_r($animal_instance );
echo "<br>";

$food_instance-> show_price() ;
echo "<br>";
$animal_instance-> show_height();


