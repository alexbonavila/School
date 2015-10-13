<?php namespace Com\Iesebre\dam2\alexbonavila\Curriculum;
use Com\Iesebre\dam2\alexbonavila\Persons\Student;

/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 5/10/15
 * Time: 19:57
 */
class ClassromGrup{
    public $students = array();

    /**
     * ClassromGrup constructor.
     * @param array $students
     */
    public function __construct(array $students)
    {
        $this->students = $students;
    }

    /**
     * @param Student $student
     */
    public function addStudent(Student $student){
        array_push($this->students);
    }

}