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
    // static variable to keep track of number of invoices
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

    // get functions for private data members
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
    public static function getInvoiceCount()
    {
        return self::$invoice_count;
    }

    // calculates payment amount
    public function getPaymentAmount()
    {
        $amt = $this->quantity * $this->price_per_item;
        return $amt;
    }

    // output details in invoice class
    public function toString()
    {
        echo "<h3>Invoice: </h3>";
        echo "Part Number: $this->part_number ($this->part_description)";

        echo "<br>Quantity: $this->quantity";
        echo "<br>Price Per Item: $$this->price_per_item";
        printf("<br>Payment: $%.2f", $this->getPaymentAmount());
        echo "<br>";
    }

}