<?php

class Student{
    private $name;
} 
// $classes = get_declared_classes();
// echo "classes: ". implode(", ",$classes)."<br />";

// $classList = ["Teacher", "Pirate", "Test", "student"];

// foreach($classList as $class){
//     if(class_exists($class)){
//         echo "Yes, the class {$class} exists!<br>";
//     }else{
//         echo "Class does not exists!<br>";
//     }
// }

$student1 = new Student;
$student2 = new Student;


$classList = ["Teacher", "Pirate", "Test", "student"];

foreach($classList as $class){
    if(is_a($student1,$class)){
        echo "Yes, the class {$class} exists!<br>";
    }else{
        echo "Class does not exists!<br>";
    }
}
echo get_class($student1);