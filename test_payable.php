<?php
/**
 * Author: Piper Varney
 * Date: 3/1/22
 * File: test_payable.php
 * Description:
 */

//convert a camel cased string to a underscored string
function camelCaseToUnderscore($str) {
    //store all characters in an array
    $characters = str_split($str);

    //covert the first character to a lowercase
    $characters[0] = strtolower($characters[0]);

    //exam all characters in the array
    //if a character is uppercase, replace it with a lowercase and prefix it with an underscore
    foreach ($characters as &$character) {
        if (ord($character) >= ord('A') && ord($character) <= ord('Z'))
            $character = '_' . strtolower($character);
    }

    //convert all elements in the array into a string and return the string
    return implode('', $characters);
}

spl_autoload_register(function($class_name){
    require_once 'classes/'. camelCaseToUnderscore($class_name) . '.class.php';
})
?>

<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <meta name="author" content="Admin" />

        <title>Lab 07</title>
    </head>

    <body>
        <h2>Payroll System Programmed with OOP</h2>
        <hr>
        <?php
        // creating Invoices
        $inv1 = new Invoice(01234, "seat", 2, 443);
        $inv2 = new Invoice(56789, "tire", 4, 79.95);

        // printing out invoice details
        $inv1->toString();
        echo "<br>************************************<br>";
        $inv2->toString();

        // creating four person objects
        $p1 = new Person("Melissa", "Rogers");
        $p2 = new Person("Steve", "Rogers");
        $p3 = new Person("Ian", "Watson");
        $p4 = new Person("Kimberlee", "Wang");

        // creating employees
        $c = new CommissionEmployee($p1, '123-44-6789', 100000, 0.085);
        $s = new SalariedEmployee ($p2, '012-34-5678', 800);
        $h = new HourlyEmployee($p3, '101-34-0980', 16.75, 42);
        $b = new BasePlusCommissionEmployee($p4, '444-44-4444', 5000, 0.06, 500);

        $employees = array($c, $s, $h, $b);


       //function to differentiate between classes and call their toString function
        function printEmployee(Employee $emp) {
            if (get_class($emp) == "CommissionEmployee") {
                  echo "<h3>Commission Employee</h3>";
            }
            else if (get_class($emp) == "SalariedEmployee") {
                echo "<h3>Salaried Employee</h3>";
            }

            else if(get_class($emp) == "HourlyEmployee") {
                echo "<h3>Hourly Employee</h3>";
            }

            else if(get_class($emp) == "BasePlusCommissionEmployee") {
                echo "<h3>Base Plus Commission Employee</h3>";
            }
            $emp->toString();
        }

        //display information by calling the toString method
        foreach ($employees as $emp) {
            echo "<br><br>************************************<br>";
            printEmployee($emp);
        }

        // displaying number of invoices and employees
        echo "<br><br>************************************<br><br>Number of Invoices: ", Invoice::getInvoiceCount();
        echo "<br>Number of Employees: ", Employee::getEmployeeCount();
        ?>
    </body>
</html>