<!DOCTYPE html>
<html>
    <head>
        <title>Test Scores</title>
        
    </head>
    <body>
        <h1>Calculate test Scores for students!</h1>
        <form method="post" action="08_lab_activity2.php">
            <label for="name">Student Name</label>
            <input name="name" id="name" type="text"/>
            <label for="test">Test average</label>
            <input name="test" id="test" type="text"/>
            <button type="submit">Calculate</button>
        </form>
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
            print_r($students);
            print("<br/>");
            print( count( $tests["Tests"] ) . "<br/>");
            for ($x = 0; $x < count($tests["Tests"]); $x++) {
                
            }
        
        ?>
    </body>
</html>