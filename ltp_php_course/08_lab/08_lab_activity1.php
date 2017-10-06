

<!DOCTYPE html>
<html>

<head>
    <title>PHP Lab 8</title>
</head>

<body>
    <h1>Add or delete from this list</h1>
    <form action="08_lab_activity1.php" method="post">    
        <label for="add">Add to the list...</label>
        <input name="add" id="add" type="text" required="required"/>
        <button type="submit">Submit</button>        
    </form>
    <br/>
    <?php
        //seting up delete part---------------------------
        if (isset($_REQUEST['delete'])){
            //delete stuff and then display it
            //print($_REQUEST['delete']);
            
            // does the actual deleting -------
            $delete = $_REQUEST['delete'];//gets the string to delete
            $i = 0; //setting up counter in while loop
            $array = array();//setting up array that will be used
            $read = fopen("08_lab.csv", "r") or die("Can't open file"); //set up pointer
            while( !feof($read) ){ //while not last line of file
                //add line to array, doesn't matter how many commas, adds the whole line
                $array[$i] = fgets($read); //gets one line from pointer file $read
                ++$i; //adding to counter for next line
            }//at end of while loop, there will be array of lines from csv in $array
            fclose($read); //close pointer file
            
            $write = fopen("08_lab.csv", "w") or die("Can't open the file");//set up pointer
            foreach($array as $line) { //for each item in array
                if( !strstr($line, $delete) ) { //if item != line I want to delete (strstr finds first occurance of $delete )
                    fwrite( $write, $line ); //write that line to the file;
                }
            }
            fclose($write);//close file pointer
            
            //set up the file again
            $count = 0;
            print("<form action=\"08_lab_activity1.php\" method=\"post\" >");
            $csv = fopen("08_lab.csv", "r") or die("can't open csv");
            while ($data = fgetcsv($csv, 1000, ",")) {
                for ($x = 0;$x < count($data); $x++){
                    print("$data[$x] <button name=\"delete\" value=\"$data[$x]\" type=\"submit\">Delete</button> <br/><br/>");
                    $count++;
                }
            }
            fclose($csv);
            print("</form>");
            
        } else if ( isset($_REQUEST['add']) ) {
            //if add is true will add items!
            $string = $_REQUEST['add'] . "\n";
            
            //read file into array
            $i = 0; //setting up counter in while loop
            $array = array();//setting up array that will be used
            $read = fopen("08_lab.csv", "r") or die("Can't open file"); //set up pointer
            while( !feof($read) ){ //while not last line of file
                //add line to array, doesn't matter how many commas, adds the whole line
                $array[$i] = fgets($read); //gets one line from pointer file $read
                ++$i; //adding to counter for next line
            }//at end of while loop, there will be array of lines from csv in $array
            fclose($read); //close pointer file
            
            //add stuff to end of array
            //$array[] = $string;
            
            //add to beginning of array
            array_unshift($array, $string);
            
            //write the array to the file!
            $write = fopen("08_lab.csv", "w") or die("Can't open the file");//set up pointer
            /*foreach($arr as $line) { //for each item in array
                    fwrite( $write, $line ); //write that line to the file;
            }*/
            for ($x=0; $x < count($array); $x++){
                fwrite( $write, $array[$x] );
            }
            fclose($write);//close file pointer
            
            /*//set up the view using array
            $count = 0;
            print("<form action=\"08_lab_activity1.php\" method=\"post\" >");
            for ($x = 0;$x < count($newArr); $x++){
                print("$newArr[$x] <button name=\"delete\" value=\"$newArr[$x]\" type=\"submit\">Delete</button> <br/>");
                $count++;
            }
            print("</form>");*/
            
            //set up the view again!
            $count = 0;
            print("<form action=\"08_lab_activity1.php\" method=\"post\" >");
            $csv = fopen("08_lab.csv", "r") or die("can't open csv");
            while ($data = fgetcsv($csv, 1000, ",")) {
                for ($x = 0;$x < count($data); $x++){
                    print("$data[$x] <button name=\"delete\" value=\"$data[$x]\" type=\"submit\">Delete</button> <br/><br/>");
                    $count++;
                }
            }
            fclose($csv);
            print("</form>");
            
        } else {
            //setting up first time it loads page------------------------
            
            //move everything from original.csv to 08_lab.csv
            $i = 0; //setting up counter in while loop
            $array = array();//setting up array that will be used
            $read = fopen("original.csv", "r") or die("Can't open file"); //set up pointer
            while( !feof($read) ){ //while not last line of file
                //add line to array, doesn't matter how many commas, adds the whole line
                $array[$i] = fgets($read); //gets one line from pointer file $read
                ++$i; //adding to counter for next line
            }//at end of while loop, there will be array of lines from csv in $array
            fclose($read); //close pointer file
            $write = fopen("08_lab.csv", "w") or die("Can't open the file");//set up pointer
            foreach($array as $line) { //for each item in array
                fwrite( $write, $line ); //write that line to the file;
            }
            fclose($write);//close file pointer
            
            //get stuff from csv and store in array and print it to the view!
            $count = 0;
            print("<form action=\"08_lab_activity1.php\" method=\"post\" >");
            $csv = fopen("original.csv", "r") or die("can't open csv");
            while ($data = fgetcsv($csv, 1000, ",")) {
                for ($x = 0;$x < count($data); $x++){
                    print("$data[$x] <button name=\"delete\" value=\"$data[$x]\" type=\"submit\">Delete</button> <br/><br/>");
                    $count++;
                }
            }
            fclose($csv);
            print("</form>");
        }
    
    
    ?>
</body>

</html>
