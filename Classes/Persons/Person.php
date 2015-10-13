<?php namespace Com\Iesebre\dam2\alexbonavila\Persons;

/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 5/10/15
 * Time: 17:50
 */
class Person{

    public $personalId;
    public $givenName;
    public $sn1;
    public $sn2;
    public $email;
    public $postalAddres;
    public $localy;
    public $postalCode;
    public $state;
    public $country;
    public $type = "persona";

    /**
     * Person constructor.
     * @param $personalId
     * @param $givenName
     * @param $sn1
     * @param $sn2
     * @param $email
     * @param $postalAddres
     * @param $localy
     * @param $postalCode
     * @param $state
     * @param $country
     * @param string $type
     */
    public function __construct($personalId, $givenName, $sn1, $sn2, $email, $postalAddres, $localy, $postalCode, $state, $country, $type)
    {
        $this->personalId = $personalId;
        $this->givenName = $givenName;
        $this->sn1 = $sn1;
        $this->sn2 = $sn2;
        $this->email = $email;
        $this->postalAddres = $postalAddres;
        $this->localy = $localy;
        $this->postalCode = $postalCode;
        $this->state = $state;
        $this->country = $country;
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getPersonalId()
    {
        return $this->personalId;
    }

    /**
     * @param mixed $personalId
     */
    public function setPersonalId($personalId)
    {
        $this->personalId = $personalId;
    }

    /**
     * @return mixed
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * @param mixed $givenName
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    /**
     * @return mixed
     */
    public function getSn1()
    {
        return $this->sn1;
    }

    /**
     * @param mixed $sn1
     */
    public function setSn1($sn1)
    {
        $this->sn1 = $sn1;
    }

    /**
     * @return mixed
     */
    public function getSn2()
    {
        return $this->sn2;
    }

    /**
     * @param mixed $sn2
     */
    public function setSn2($sn2)
    {
        $this->sn2 = $sn2;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPostalAddres()
    {
        return $this->postalAddres;
    }

    /**
     * @param mixed $postalAddres
     */
    public function setPostalAddres($postalAddres)
    {
        $this->postalAddres = $postalAddres;
    }

    /**
     * @return mixed
     */
    public function getLocaly()
    {
        return $this->localy;
    }

    /**
     * @param mixed $localy
     */
    public function setLocaly($localy)
    {
        $this->localy = $localy;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }
    public function render(){

            echo "La {$this->type} te el nom" . $this->getGivenName();

    }
}