<?php

use Com\Iesebre\dam2\alexbonavila\Persons;
use Com\Iesebre\dam2\alexbonavila\Curriculum;

require "/home/alumne/Code/School/Classes/Persons/Person.php";

//Person
$person =  new Persons/Person();
$person->type ="Pepyta";
$person->setGivenName("Pepeita");
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
$teacher ->setGivenName("Sergi");
$teacher ->setSalary(30000);
$teacher->render();

//Grup de classe
$students=[$student];
$classGroup = new Curriculum\ClassromGrup($students);
$classGroup ->addStudent($student1);

//SubModul
$studySubModule = new Curriculum\StudySubModule("UF1");

//Modul
$subModules= [];
$studyModule = new Curriculum\StudyModule("Android",$subModules);
$studyModule ->addSubModule($studySubModule);

