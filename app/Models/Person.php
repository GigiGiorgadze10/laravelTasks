<?php

namespace App\Models;

class Person {
    public $name;
    private $age;

    public function __construct($name = null, $age = null) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getDetails() {
        return "Name: $this->name, Age: $this->age";
    }

    public function getAge() {
        return $this->age;
    }

    public static function averageAge($people) {
        $totalAge = 0;
        foreach ($people as $person) {
            $totalAge += $person->age;
        }
        return $totalAge / count($people);
    }
}