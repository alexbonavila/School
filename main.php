<?php

use Com\Iesebre\dam2\alexbonavila\Persons;

require "/home/alumne/Code/School/Classes/Persons/Person.php";

//Person
$person = Persons/ new Persons;
$person->type ="Pepyta";
$person->setGivenName("Pepeita Palotes");
$person->render();

//Estudiant no dual
$student =new Persons\Student();
$student ->setGivenName("Paco");
$student ->render();

//Estudiant dual
$student1 =new Persons\Student(True);
$student1 ->setGivenName("Francisco");
$student1 ->render();

//Profe
$teacher =new Persons\Teacher();
$teacher ->setGivenName();
$teacher ->setSalary(30000);
$teacher->render();