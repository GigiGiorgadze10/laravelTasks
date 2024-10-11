<?php

namespace App\Models;

class Student extends Person {
    private $studentId; 

    public function __construct($name, $age, $studentId) {
        parent::__construct($name, $age);
        $this->studentId = $studentId;
    }

    public function getStudentId() {
        return $this->studentId;  
    }
}
