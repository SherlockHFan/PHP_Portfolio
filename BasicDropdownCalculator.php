<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="woptionth=device-woptionth, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="post"> 
      <input type= "int" name="num1" placeholder="1st Number">;
      <input type= "int" name="num2" placeholder="2nd Number">;
      <select name="operators">
        <option value= "+">+</option>;
        <option value= "-">-</option>;
        <option value= "*">*</option>;
        <option value= "/">/</option>;
        <option value= "%">%</option>;
        <!--<option value= "()">()</option>; Still working on parenthesis-->
    </select>
    <button type= "submit" name= "Go">Go</button>
    </form>

</body>
</html>

<?php 
    /* 
      +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
       - By SherlockHFan: https://github.com/SherlockHFan -
      +++++++++++++++++++++++++++++++++++++++++++++++++++++++++

        Calculator version 1 (no buttons, advanced logic, customization)
        ================================================================
        - Line 10: Create a form and call POST   
        - Line 11: Create the first number
        - Line 12: Create the second number
        - Line 13: Create the submit button
        - Lines 14-19 : Create the arithmetic operator options needed for the 
                      program to run after collecting users input
        - Line 39-58: Create a if-elseif statement to contain arthmetic operators. 
                      Line 56 prints a string for '0'.
        - Line 61: echo out the returned result.      
        
        ===========================================================

        ***Languages used: Php, Html

        --------------------------------------------------------------------
        Version 2: - Upcoming advanced math, 
                   - Smartphone button interface
                   - Basic color adjustments 
        
    */

    if (isset($_POST['Go'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operators'];

    if ($operator == '+') {
        $sum= $num1 + $num2;
    }    elseif ($operator == "-") {
            $sum= $num1 - $num2;
    }       elseif ($operator == '*') {
                $sum= $num1 * $num2; 
            }           
                    elseif ($operator == '/') {
                if ($num2 != 0) {
                    $sum= $num1 / $num2;
                } else {
                    $sum= "Could not divoptione by zero";
                }
    }               elseif ($operator == '%') {
                        $sum= $num1 % $num2;
    } 
    echo "Calculated: " . $sum;
    }
?>





