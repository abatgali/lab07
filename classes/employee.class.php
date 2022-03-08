<?php
/**
 * Author: Sierra Braun
 * Date: 3/1/22
 * File: employee.class.php
 * Description:
 */

abstract class Employee implements Payable {

    //private data member for ssn
    private $ssn;

    // composing Employee class with Person class' object
    private $person;

    private static $employee_count = 0;

    //constructor
    public function __construct($person, $ssn){
        $this->person = new Person($person->getFirstName(), $person->getLastName());
        $this->ssn = $ssn;
        self::$employee_count++;
    }

    //get methods
    public function getPerson()
    {
        return $this->person->getFirstName() . ' ' . $this->person->getLastName();
    }

    public function getSsn(){
        return $this->ssn;
    }

    public static function getEmployeeCount(){
        return self::$employee_count;
    }

/*
    //set methods
    public function setSsn($ssn){
        $this->ssn = $ssn;
    }*/


    //tostring
    abstract public function toString();
}