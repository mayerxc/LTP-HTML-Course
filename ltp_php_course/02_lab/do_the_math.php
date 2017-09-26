<?php
    $operand1 = $_REQUEST['operand1'];
    $operand2 = $_REQUEST['operand2'];

    print($operand1 . " + " . $operand2 . " = " . $operand1 + $operand2);
    print("<br/>");
    print($operand1 . " - " . $operand2 . " = " . $operand1 - $operand2);
    print("<br/>");
    print($operand1 . " * " . $operand2 . " = " . $operand1 * $operand2);
    print("<br/>");
    print($operand1 . " / " . $operand2 . " = " . $operand1 / $operand2);
?>