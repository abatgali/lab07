<?php
/**
 * Author: Sierra Braun
 * Date: 3/3/22
 * File: person.class.php
 * Description:
 */

//define class
class Person {


    //data members for first and last name
    private $first_name, $last_name;


    //construct name
    public function __construct($first_name, $last_name){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }


    //get name
    public function getFirstName(){
        return $this->first_name;
    }

    public function getLastName(){
        return $this->last_name;
    }


    //set name
    public function setFirstName($first_name){
        $this->first_name = $first_name;
    }

    public function setLastName($last_name){
        $this->last_name = $last_name;
    }


    //to string function
    public function toString(){
        echo "Name:", $this->getFirstName(), " ", $this->getLastName();
    }
}