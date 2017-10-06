<!DOCTYPE html>
<html>
    <head>
        <title>Tax Calculator</title>
        
    </head>
    <body>
        <h1>Calculate test Scores for studends!</h1>
        <form method="post" action="08_lab_activity2.php">
            <label for="name">Full Name</label>
            <input name="name" id="name" type="text"/>
            <label for="income">Income</label>
            <input name="income" id="income" type="text"/>
            <button type="submit">Calculate tax owed</button>
        </form>
        <?php
            $students = ["Smith"=>["Tests"=>[98,75,100, 91]],
                         "Johnson"=>["Tests"=>[67,88, 85, 81]], 
                         "Fields", 
                         "Laurel", 
                         "Gold", 
                         "Braverman", 
                         "Stone", 
                         "Kiel"];
            print_r($students);
        
        ?>
    </body>
</html>