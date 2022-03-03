<?php

interface Payable {

    // abstract methods
    public function getPaymentAmount();

    public function toString();
}