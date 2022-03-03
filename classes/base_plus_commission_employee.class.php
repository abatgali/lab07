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

    public function __construct($name, $title, $years, $salary, $base_salary) {
        parent::__construct($name, $title, $years, $salary);
        $this->base_salary = $base_salary;
    }

    public function getBaseSalary() {
        return $this->base_salary;
    }

    public function getPaymentAmount() {
        $payment_amount = ($this->base_salary) + ($this->sales) * ($this->commission_rate);
        return $payment_amount;
    }

    public function toString() {
        //echo it up!
    }
}