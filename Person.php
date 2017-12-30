<?php 

class Person{
    public $age = 1;

    public function haveBirthday()
    {
        $this->age++;
    }

    public function age()
    {
        return $this->age;
    }

}

$joe = new Person;
$joe->haveBirthday();
$joe->haveBirthday();

$jane = new Person;
$jane->haveBirthday(); // should be 2

echo $joe->age();
echo $jane->age();