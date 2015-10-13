<?php namespace Com\Iesebre\dam2\alexbonavila\Persons;

/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 5/10/15
 * Time: 18:06
 */
class Teacher extends Person{

    use Worker;

    public $salary;
    public $specialitation;

    public function render(){
        $this->type = Profesor;
        parent::render;
    }
}