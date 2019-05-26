<?php
namespace YYDH;

class Human {
    private $name;
    private $age;

    public function introduce() {
        echo "나의 이름은  $this->name ($this->age) 입니다.";
    }
    
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
}