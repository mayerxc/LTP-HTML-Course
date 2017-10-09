<!DOCTYPE html>
<html>
    <head>
        <title>Calculate Student Scores</title>
        <style>
            table, th {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th {
                width: 100px;
            }
            td {
                border: 1px solid black;
                border-collapse: collapse;
                text-align: center;
            }
        
        
        </style>
    </head>
    <body>
        <h1>Calculate test Scores for students</h1>
        
        <?php
            $students = ["Smith"=>["Tests"=>[98,75,100, 91]],
                         "Johnson"=>["Tests"=>[67,88, 85, 81]], 
                         "Fields"=>["Tests"=>[71,81,76,77]], 
                         "Laurel"=>["Tests"=>[68,63,71,70]], 
                         "Gold"=>["Tests"=>[91,67,63,90]], 
                         "Braverman"=>["Tests"=>[88,82,55,82]], 
                         "Stone"=>["Tests"=>[84,77,81,90]], 
                         "Kiel"=>["Tests"=>[84,81,79,100]]];
        
            $tests = ["Tests"=>[[98,75,100, 91],
                                [67,88, 85, 81],
                                [71,81,76,77],
                                [68,63,71,70],
                                [91,67,63,90],
                                [88,82,55,82],
                                [84,77,81,90],
                                [84,81,79,100]]];
            
            
            $studentsOnly = array_keys($students);
            
            
            print_r($tests);
            print("<br/>");
            print("<br/>The above array is used to calculate the following data:<br/>");
            print("<br/>");
        
            //for loops displaying the test average
            $sum = 0;
            for ( $x = 0; $x < count($tests["Tests"][$x]); $x++ ) {
                //make test number not at index 0;
                $testNumber = $x + 1;
                print("Test number: $testNumber");
                print("<br/>");
                for ($y = 0; $y < count($tests["Tests"]); $y++) {
                    //Test score for each individual test
                    print("Test score: " . $tests["Tests"][$y][$x]);
                    print("<br/>");
                    //add up each test
                    $sum = $tests["Tests"][$y][$x] + $sum;
                }
                //calculate average from the sum in nested loop
                $average = $sum / count($tests["Tests"]);
                print("Average test score for Test Number $testNumber is: $average");
                print("<br/>");
                print("<br/>");
                //reset sum for next average
                $sum = 0;
            }
        
            print("<h1>Each student's average test score:</h1>");
            print("<br/>");
            print_r($students);
            print("<br/>");
            print("<br/>The above array is used to calculate the student's average score on all four tests:<br/>");
            print("<br/>");
        ?>
    
        <?php
            
            foreach ($students as $key => $value) {
                //Name of each student
                echo("Student: $key");
                print("<br/>");
                
                $sum = 0;
                for ($i=0; $i < count($value["Tests"]); $i++) {
                    //get the sum for all tests of each student
                    $sum = $value["Tests"][$i] + $sum;
                }
                //use sum from for loop to calculate average for each student
                $average = $sum / count( $value["Tests"] );
                print("$key's average test score is: $average");
                print("<br/>");
                print("<br/>");
                //next student
            }
        ?>
        
        <h1>Creating table with arrays</h1>
        <table>
            <tr>
                <th></th><th>Test 1</th><th>Test 2</th><th>Test 3</th><th>Test 4</th><th>Average</th>
            </tr>
            <tr>
                <?php 
                    $studentRow = 0;
                    print("<td>$studentsOnly[$studentRow]</td>");
                    print("<td>" . $tests["Tests"][$studentRow][0] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][1] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][2] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][3] . "</td>");
                    $average = ($tests["Tests"][$studentRow][0] + $tests["Tests"][$studentRow][1] + $tests["Tests"][$studentRow][2] + $tests["Tests"][$studentRow][3]) / 4;
                    print("<td>" . $average . "</td>");
                ?> 
            </tr>
            <tr>
                <?php 
                    $studentRow = 1;
                    print("<td>$studentsOnly[$studentRow]</td>");
                    print("<td>" . $tests["Tests"][$studentRow][0] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][1] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][2] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][3] . "</td>");
                    $average = ($tests["Tests"][$studentRow][0] + $tests["Tests"][$studentRow][1] + $tests["Tests"][$studentRow][2] + $tests["Tests"][$studentRow][3]) / 4;
                    print("<td>" . $average . "</td>");
                ?> 
            </tr>
            <tr>
                <?php 
                    $studentRow = 2;
                    print("<td>$studentsOnly[$studentRow]</td>");
                    print("<td>" . $tests["Tests"][$studentRow][0] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][1] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][2] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][3] . "</td>");
                    $average = ($tests["Tests"][$studentRow][0] + $tests["Tests"][$studentRow][1] + $tests["Tests"][$studentRow][2] + $tests["Tests"][$studentRow][3]) / 4;
                    print("<td>" . $average . "</td>");
                ?> 
            </tr>
            <tr>
                <?php 
                    $studentRow = 3;
                    print("<td>$studentsOnly[$studentRow]</td>");
                    print("<td>" . $tests["Tests"][$studentRow][0] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][1] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][2] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][3] . "</td>");
                    $average = ($tests["Tests"][$studentRow][0] + $tests["Tests"][$studentRow][1] + $tests["Tests"][$studentRow][2] + $tests["Tests"][$studentRow][3]) / 4;
                    print("<td>" . $average . "</td>");
                ?> 
            </tr>
            <tr>
                <?php 
                    $studentRow = 4;
                    print("<td>$studentsOnly[$studentRow]</td>");
                    print("<td>" . $tests["Tests"][$studentRow][0] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][1] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][2] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][3] . "</td>");
                    $average = ($tests["Tests"][$studentRow][0] + $tests["Tests"][$studentRow][1] + $tests["Tests"][$studentRow][2] + $tests["Tests"][$studentRow][3]) / 4;
                    print("<td>" . $average . "</td>");
                ?> 
            </tr>
            <tr>
                <?php 
                    $studentRow = 5;
                    print("<td>$studentsOnly[$studentRow]</td>");
                    print("<td>" . $tests["Tests"][$studentRow][0] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][1] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][2] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][3] . "</td>");
                    $average = ($tests["Tests"][$studentRow][0] + $tests["Tests"][$studentRow][1] + $tests["Tests"][$studentRow][2] + $tests["Tests"][$studentRow][3]) / 4;
                    print("<td>" . $average . "</td>");
                ?> 
            </tr>
            <tr>
                <?php 
                    $studentRow = 6;
                    print("<td>$studentsOnly[$studentRow]</td>");
                    print("<td>" . $tests["Tests"][$studentRow][0] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][1] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][2] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][3] . "</td>");
                    $average = ($tests["Tests"][$studentRow][0] + $tests["Tests"][$studentRow][1] + $tests["Tests"][$studentRow][2] + $tests["Tests"][$studentRow][3]) / 4;
                    print("<td>" . $average . "</td>");
                ?> 
            </tr>
            <tr>
                <?php 
                    $studentRow = 7;
                    print("<td>$studentsOnly[$studentRow]</td>");
                    print("<td>" . $tests["Tests"][$studentRow][0] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][1] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][2] . "</td>");
                    print("<td>" . $tests["Tests"][$studentRow][3] . "</td>");
                    $average = ($tests["Tests"][$studentRow][0] + $tests["Tests"][$studentRow][1] + $tests["Tests"][$studentRow][2] + $tests["Tests"][$studentRow][3]) / 4;
                    print("<td>" . $average . "</td>");
                ?> 
            </tr>
            
            <tr>
                <td>Average</td>
                <?php
                    $testColumn = 0;
                    $sum = 0;
                    for ($i = 0; $i < count($tests["Tests"]); $i++) {
                        $sum = $sum + $tests["Tests"][$i][$testColumn];
                    }
                    $average = $sum / count($tests["Tests"]);
                    print("<td>" . $average . "</td>");
                
                ?>
                <?php
                    $testColumn = 1;
                    $sum = 0;
                    for ($i = 0; $i < count($tests["Tests"]); $i++) {
                        $sum = $sum + $tests["Tests"][$i][$testColumn];
                    }
                    $average = $sum / count($tests["Tests"]);
                    print("<td>" . $average . "</td>");
                ?>
                <?php
                    $testColumn = 2;
                    $sum = 0;
                    for ($i = 0; $i < count($tests["Tests"]); $i++) {
                        $sum = $sum + $tests["Tests"][$i][$testColumn];
                    }
                    $average = $sum / count($tests["Tests"]);
                    print("<td>" . $average . "</td>");
                ?>
                <?php
                    $testColumn = 3;
                    $sum = 0;
                    for ($i = 0; $i < count($tests["Tests"]); $i++) {
                        $sum = $sum + $tests["Tests"][$i][$testColumn];
                    }
                    $average = $sum / count($tests["Tests"]);
                    print("<td>" . $average . "</td>");
                ?>
                <td>
                    <!--average of average could go here???-->
                </td>
            </tr>
        </table>
    </body>
</html>