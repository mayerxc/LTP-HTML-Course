<?php
    $name = $_REQUEST['name'];
    $income = $_REQUEST['income'];
    
    if ($income < 25000) {
        $taxRate = .025;
    } else if ( $income < 45000 ){
        $taxRate = .0355;
    } else if ( $income < 65000 ){
        $taxRate = .0425;
    } else if ( $income < 90000 ){
        $taxRate = .0515;
    } else if ( $income < 140000 ){
        $taxRate = .0650;
    } else if ( $income < 200000 ){
        $taxRate = .0700;
    } else if ( $income < 1000000 ){
        $taxRate = .1000;
    } else {
        $taxRate = .1250;
    }
    
    $taxOwed = $income * $taxRate;
    print("<h1>Tax Statement</h1>");
    print("<p>Name: $name<p>");
    print("<p>Income: $income<p>");
    print("<p>Tax Rate: $taxRate<p>");
    print("<p>Tax Owed: $taxOwed<p>");

?>