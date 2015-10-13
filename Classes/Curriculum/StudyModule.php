<?php namespace Com\Iesebre\dam2\alexbonavila\Curriculum;

/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 5/10/15
 * Time: 19:58
 */
class StudyModule{

    public $moduleName;
    public $subModule = array();

    /**
     * StudyModule constructor.
     * @param $moduleName
     * @param array $subModule
     */
    public function __construct($moduleName, array $subModule)
    {
        $this->moduleName = $moduleName;
        $this->subModule = $subModule;
    }

    public function addSubModule(StudySubModule $subModule){
        array_push($this->subModule);
    }

    /**
     * @return mixed
     */
    public function getModuleName()
    {
        return $this->moduleName;
    }

    /**
     * @param mixed $moduleName
     */
    public function setModuleName($moduleName)
    {
        $this->moduleName = $moduleName;
    }

    /**
     * @return array
     */
    public function getSubModule()
    {
        return $this->subModule;
    }

    /**
     * @param array $subModule
     */
    public function setSubModule($subModule)
    {
        $this->subModule = $subModule;
    }


}