<?php
/**
 * Author: Anant Batgali
 * Date: 3/1/22
 * File: invoice.class.php
 * Description:
 */

class Invoice implements Payable
{
    // private data members
    private $part_number;
    private $part_description;
    private $quantity;
    private $price_per_item;
    private static $invoice_count = 0;

    // constructor
    public function __construct($partNum, $partDesc, $quantity, $pricePerItem)
    {
        $this->part_number = $partNum;
        $this->part_description = $partDesc;
        $this->quantity = $quantity;
        $this->price_per_item = $pricePerItem;
        self::$invoice_count++;
    }

    /**
     * @return mixed
     */
    public function getPartNumber()
    {
        return $this->part_number;
    }

    /**
     * @return mixed
     */
    public function getPartDescription()
    {
        return $this->part_description;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return mixed
     */
    public function getPricePerItem()
    {
        return $this->price_per_item;
    }

    /**
     * @return mixed
     */
    public function getInvoiceCount()
    {
        return self::$invoice_count;
    }

    // calculates payment amount
    public function getPaymentAmount()
    {
        return $this->price_per_item * $this->quantity;
    }

    // output details in invoice class
    public function toString()
    {
        echo "<b>Invoice: </b><br>";
        echo "Part Number: , $this->part_number";
        echo "<br>($this->part_description)";
        echo "<br>Quantity: , $this->quantity";
        echo "<br>Price Per Item: $, $this->price_per_item";
        printf("<br>Payment: $", $this->getPaymentAmount());
    }


}