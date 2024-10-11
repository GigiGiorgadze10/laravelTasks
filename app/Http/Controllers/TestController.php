<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Student;

class TestController extends Controller
{
    public function index() {
        // Task 1-6: Instantiate the classes
        $person = new Person('John', 25);
        echo $person->getDetails();

        // Task 3: Student Class
        $student = new Student('Jane', 22, 'S12345');
        echo $student->getDetails();

        // Task 6: Static method example
        $people = [
            new Person('John', 25),
            new Person('Jane', 30),
            new Person('Doe', 35)
        ];
        echo "Average Age: " . Person::averageAge($people);
    }
}