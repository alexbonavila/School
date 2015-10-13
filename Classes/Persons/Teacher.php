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

    /**
     * @return mixed
     */
    public function getSpecialitation()
    {
        return $this->specialitation;
    }

    /**
     * @param mixed $specialitation
     */
    public function setSpecialitation($specialitation)
    {
        $this->specialitation = $specialitation;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public $specialitation;

    public function render(){
        $this->type = Profesor;
        parent::render;
    }
}