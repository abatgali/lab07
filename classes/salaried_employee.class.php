<?php
/**
 * Author: Piper Varney
 * Date: 3/1/22
 * File: salaried_employee.class.php
 * Description:creates the salaried employee class which inherits from the Employee class
 */

class SalariedEmployee extends Employee {
    private $weekly_salary;

    //we likely don't need this here as it gets inherited from Employee
    //- static data member to count number of employees
    //private static $employee_count = 0;

    //constructor
    public function __construct($person, $ssn, $weekly_salary)
    {
        parent::__construct($person, $ssn);
        $this->weekly_salary = $weekly_salary;
        //self::$employee_count++;
    }

    //get method for weekly salary
    public function getWeeklySalary()
    {
        return $this->weekly_salary;
    }

    //get method for payment amount
    public function getPaymentAmount()
    {
        return $this->getWeeklySalary();
    }

    //toString method
    public function toString()
    {
        echo "Name: ", $this->getPerson();
        echo "<br>Social security number: ", $this->getSsn();
        echo "<br>Weekly Salary: $", $this->getWeeklySalary();
        echo "<br>Earning: $", $this->getPaymentAmount();
    }

}