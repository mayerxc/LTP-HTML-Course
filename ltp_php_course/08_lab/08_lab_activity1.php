

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
        $count = 0
        $arr = array("Commodore 64",
                        "ZX Spectrum",
                        "IBM PC 5150", 
                        "Apple Macintosh",
                        "Amstrad CPC 464", 
                        "BBC Micro",);
        foreach ($arr as $value) {
            echo("$value <button id='$value'>delete</button><br/><br/>");
        }
    
    
    
    
/*        if ( !isset($_REQUEST['add']) ) {
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