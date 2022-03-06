<?php

/**
 * Author: Kavin Thakkar
 * Date: 3/1/22
 * File: commission_employee.class.php
 * Description: The commission_employee.class.php file contains the CommissionEmployee class, which
 * also inherits from the Employee class. Commission employees are paid a percentage of their sales.
 */
class CommissionEmployee extends Employee
{
    private $sales, $commission_rate;

    public function __construct($person, $ssn, $sales, $commission_rate) {
        parent::__construct($person, $ssn);
        $this->sales = $sales;
        $this->commission_rate = $commission_rate;
    }

    public function getSales() {
        return $this->sales;
    }

    public function getCommissionRate() {
        return $this->commission_rate;
    }

    public function getPaymentAmount() {
        $payment_amount = ($this->sales) * ($this->commission_rate);
        return $payment_amount;
    }

    public function toString() {
//echo it up!
        echo "Name: ", $this->getPerson();
        echo "<br>Social security number: ", $this->getSsn();
        echo "<br>Gross Sale: $", $this->getSales();
        echo "<br>Commission Rate: ", $this->getCommissionRate();
        echo "<br>Earning: $", $this->getPaymentAmount();
    }
}