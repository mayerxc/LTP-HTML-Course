<!DOCTYPE html>
<html>

<head>
    <title>PHP Lab 6</title>
    <style>
        .black {
            display: inline-block;
            height: 50px;
            width: 50px;
            background-color: black;
            border: 1px solid black;
            vertical-align: bottom;
        }
        .white {
            display: inline-block;
            height: 50px;
            width: 50px;
            background-color: white;
            border: 1px solid black;
            vertical-align: bottom;
        }
        span{
            display: block;
            vertical-align: bottom;
        }
    </style>
</head>

    <body>
        <?php
            $rows = $_REQUEST['rows'];
            $columns = $_REQUEST['columns'];
            $mod = 0;
            print("Number of rows: $rows");
            print("<br/>");
            print("Number of Columns: $columns");
            print("<br/><br/>");
        
            for($x = 0; $x < $rows; $x++) {
                //every row inbetween span, span css is display:block,so will create new row
                print("<span>");
                //even row makes column start with black, odd starts with white, row starts at 0 so 1st row even
                if($x % 2 === 0){
                    $mod = 0;
                } else {
                    $mod = 1;
                }
                //inside row creating the columns!
                for ($y = 0; $y < $columns; $y++) {
                    //each row changes from starting black or white and columns are every other one too
                    if ($y % 2 === $mod){
                        print('<div class="black"></div>');    
                    } else {
                        print('<div class="white"></div>');
                    }    

                }
                //ending span tag
                print("</span>");
            }
        ?>
    
    </body>
</html>





