<?php

use Com\Iesebre\dam2\alexbonavila\Persons;

require "/home/alumne/Code/School/Classes/Persons/Person.php";

$person =new Person();

$person->type ="Pepyta";
$person->setGivenName("Pepeita Palotes");

$person->render();