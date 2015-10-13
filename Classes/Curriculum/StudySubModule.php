<?php namespace Com\Iesebre\dam2\alexbonavila\Curriculum;

/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 5/10/15
 * Time: 19:58
 */
class StudySubModule{
    public $submodulename;

    /**
     * StudySubModule constructor.
     * @param $submodulename
     */
    public function __construct($submodulename)
    {
        $this->submodulename = $submodulename;
    }

    /**
     * @return mixed
     */
    public function getSubmodulename()
    {
        return $this->submodulename;
    }

    /**
     * @param mixed $submodulename
     */
    public function setSubmodulename($submodulename)
    {
        $this->submodulename = $submodulename;
    }
}