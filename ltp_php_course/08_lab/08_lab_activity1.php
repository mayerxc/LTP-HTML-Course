

<!DOCTYPE html>
<html>

<head>
    <title>PHP Lab 8</title>
</head>

<body>
    <h1>Add or delete from this list</h1>
    <form action="08_lab_activity1.php" method="post">    
        <label for="rows">Add to the list...</label>
        <input name="add" id="add" type="text"/>
        <button type="submit">Submit</button>        
    </form>
    <br/>
    <?php
        if (isset($_REQUEST['delete'])){
            //delete stuff
            print($_REQUEST['delete']);
        } else {
            //get stuff from csv and store in array and print it
            $count = 0;
            print("<form action=\"08_lab_activity1.php\" method=\"post\" >");
            $csv = fopen("08_lab.csv", "r") or die("can't open csv");
            while ($data = fgetcsv($csv, 1000, ",")) {
                for ($x = 0;$x < count($data); $x++){
                    print("$data[$x] <button name=\"delete\" value=\"$data[$x]\" type=\"submit\">Delete</button> <br/>");
                    $count++;
                }
            }
        }
    
    
      /*  
        foreach ($arr as $value) {
            echo("$value <button id='$value'>delete</button><br/><br/>");
        }
    
    
    
    
        if ( !isset($_REQUEST['add']) ) {
            print("it's undefined<br/>");
            
            foreach($arr as $arrays) {
                print("$arrays<br/>");
            }
        } else {
            $result = $_REQUEST['add'];
            print("Result: $result<br/>");
            $count = count($result);
            print($count);
        }*/
    
    ?>
</body>

</html>