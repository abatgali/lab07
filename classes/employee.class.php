<?php
/**
 * Author: Sierra Braun
 * Date: 3/1/22
 * File: employee.class.php
 * Description:
 */

class Employee extends Person{

    //private data member for ssn
    private $ssn;

    private static $employee_count = 0;

    //constructor
    public function __construct($first_name, $last_name, $ssn, $employee_count){
        parent::__construct($first_name, $last_name);
        $this->ssn = $ssn;
        self::$employee_count++;
    }

    //get methods
    public function getSsn(){
        return $this->ssn;
    }

    public static function getEmployeeCount(){
        return self::$student_count;
    }


    //set methods
    public function setSsn(){
        $this->ssn = $ssn;
    }


    //tostring
    public function toString(){
        parent::toString();
        echo "SSN: ", $this->getSsn();
    }
}