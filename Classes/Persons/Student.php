<?php namespace Com\Iesebre\dam2\alexbonavila\Persons;

/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 5/10/15
 * Time: 18:13
 */
class Student extends Person{

    use Worker;

    public  $dual=false;
    public $classroomGroup;

    public function __construct($dual=null){
        parent::__Construct();
        if($dual != null){
            $this->dual = $dual;
        }

    }


    public function render(){
        $this->type = Student;
        parent::render;

    }

}