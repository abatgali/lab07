<?php

/**
 * Author: Kavin Thakkar
 * Date: 3/1/22
 * File: commission_employee.class.php
 * Description: The commission_employee.class.php file contains the CommissionEmployee class, which
 * also inherits from the Employee class.
 */
class CommissionEmployee extends Employee
{
    private $sales, $commission_rate;

    public function __construct($name, $title, $years, $salary) {
        parent::__construct($name, $title, $years, $salary);
    }

    public function getSales() {
        return $this->sales;
    }

    public function getCommissionRate() {
        return $this->commission_rate;
    }

    public function getPaymentAmount() {
        return $this->payment_amount;
    }

    public function toString() {
//echo it up!
    }
}