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
    private $invoice_count;

    // constructor
    public function __construct($partNum, $partDesc, $quantity, $pricePerItem, $invoice_count)
    {
        $this->part_number = $partNum;
        $this->part_description = $partDesc;
        $this->quantity = $quantity;
        $this->price_per_item = $pricePerItem;
        $this->invoice_count = $invoice_count;
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
        return $this->invoice_count;
    }

    // calculates payment amount
    public function getPaymentAmount()
    {
        return $this->price_per_item * $this->quantity;
    }

    // output details in invoice class
    public function toString()
    {
        echo "<b>Invoice Count: </b>, $this->invoice_count";
        echo "<b>Part Number: </b>, $this->part_number";
        echo "<b>Part Description: </b>, $this->part_description";
        echo "<b>Price Per Item: </b>, $this->price_per_item";
        echo "<b>Quantity: </b>, $this->quantity";
        printf("<b>Payment Amount: </b>", $this->getPaymentAmount());
    }


}