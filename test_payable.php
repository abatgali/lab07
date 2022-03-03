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

/*spl_autoload_register(function($class_name){
    require_once camelCaseToUnderscore($class_name) . '.class.php';
});*/
?>

<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <meta name="author" content="Admin" />

        <title>The Person class and its subclasses</title>
    </head>

    <body>

        <?php

        //create two GradStudent and two Undergrad objects
        $c = new CommissionEmployee("Mellisa Rogers", "Manager", 3, 75000, 20, 10.5);
        $s = new SalariedEmployee ("Mellisa Rogers", "Asst. Manager", 500);
        $h = new HourlyEmployee("Ian Watson", "012-33-4567", 10.5, 3);
        $b = new BasePlusCommissionEmployee("Kimberlee Wang", "Receptionist", 5, 50000, 55, 20);

        $employees = array($c, $s, $h, $b);


       //display the string representation of a Student object
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

/*
        echo "<h3>", GradStudent::getStudentCount(), " graduate students have been created.</h3>";
        echo "<h3>", UndergradStudent::getStudentCount(), " undergraduate students have been
               created.</h3>";


    // create two Medical Student objects
    $m1 = new MedicalStudent("Timothy Lindsey", "male", "Family Medicine", 3.4, "MD", 11.0);
    $m2 = new MedicalStudent("Amy Ling", "Female", "Anesthesiology", 3.8, "MD", 10.8);

    $students = array($g1, $g2, $u1, $u2, $m1, $m2);

    echo "<h3>". MedicalStudent::getStudentCount() . " medical students have been created.</h3>";*/

    //display information by calling the toString method
    foreach ($employees as $emp) {
        printEmployee($emp);
    }
    ?>
    </body>
</html>