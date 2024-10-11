<?php

namespace App\Models;

class Student extends Person {
    private $studentId;  // Change to protected or add a getter method

    public function __construct($name, $age, $studentId) {
        parent::__construct($name, $age);
        $this->studentId = $studentId;
    }

    public function getStudentId() {
        return $this->studentId;  // Getter for accessing studentId
    }
}
