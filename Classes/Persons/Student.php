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

    /**
     * @return bool|null
     */
    public function getDual()
    {
        return $this->dual;
    }

    /**
     * @param bool|null $dual
     */
    public function setDual($dual)
    {
        $this->dual = $dual;
    }

    /**
     * @return mixed
     */
    public function getClassroomGroup()
    {
        return $this->classroomGroup;
    }

    /**
     * @param mixed $classroomGroup
     */
    public function setClassroomGroup($classroomGroup)
    {
        $this->classroomGroup = $classroomGroup;
    }


    public function render(){
        $this->type = Student;
        parent::render;

    }

}