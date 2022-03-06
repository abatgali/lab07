<?php
/**
 * Author: Piper Varney
 * Date: 3/1/22
 * File: hourly_employee.class.php
 * Description: create HourlyEmployee class which inherits from the Employee class
 */

class HourlyEmployee extends Employee{
    private $wage, $hours;

    //static data member to count number of employees
    //private static $employee_count = 0;

    //the constructor
    public function __construct($person, $ssn, $wage, $hours)
    {
        parent::__construct($person, $ssn);
        $this->wage = $wage;
        $this->hours = $hours;
        //self::$employee_count++;
    }

    //get method for wage
    public function getWage()
    {
        return $this->wage;
    }

    //get method for hours
    public function getHours()
    {
        return $this->hours;
    }

    //get method for payment amount
    public function getPaymentAmount()
    {
        $payment_amount = $this->wage * $this->hours;

        //overtime calculation
        if ($this->hours > 40) {
           $this->wage = $this->wage * 1.5;
        }

        return $payment_amount;
    }

    //toString method
    public function toString()
    {
        echo "Name: ", $this->getPerson();
        echo "<br>Social security number: ", $this->getSsn();
        echo "<br>Wage per Hour: $", $this->getWage();
        echo "<br>Hours: ", $this->getHours();
        echo "<br>Earning: $", $this->getPaymentAmount();

    }
}