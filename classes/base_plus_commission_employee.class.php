<?php

/**
 * Author: Kavin Thakkar
 * Date: 3/1/22
 * File: base_plus_commission_employee.class.php
 * Description: The base_plus_commission_employee.class.php contains the class named
 * BasePlusCommissionEmployee, which inherits from the CommissionEmployee class.
 * Base plus commission employees receive a base salary plus a percentage of their sales.
 */
class BasePlusCommissionEmployee extends CommissionEmployee
{
    private $base_salary;

    public function __construct($person, $ssn, $sales, $commission_rate, $base_salary) {
        parent::__construct($person, $ssn, $sales, $commission_rate);
        $this->base_salary = $base_salary;
    }

    public function getBaseSalary() {
        return $this->base_salary;
    }

    public function getPaymentAmount() {
        $payment_amount = ($this->base_salary) + ($this->getSales()) * ($this->getCommissionRate());
        return $payment_amount;
    }

    public function toString() {
        //echo it up!
        echo "Name: ", $this->getPerson();
        echo "<br>Social security number: ", $this->getSsn();
        echo "<br>Gross Sale: $", $this->getSales();
        echo "<br>Commission Rate: ", $this->getCommissionRate();
        echo "<br>Base Salary: $", $this->getBaseSalary();
        echo "<br>Earning: $", $this->getPaymentAmount();
    }
}