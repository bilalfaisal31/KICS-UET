<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body{
            background-color: #Eaf4fc;
        }
    </style>
</head>
<body>
    <?php 
        echo '<br><br>';

        function printStarts($num){
            $i = 0;
            while($i<$num){
                $j=0;
                while($j<=$i){
                    echo "* ";
                    $j++;
                }
                echo "<br>";
                $i++;
            }
            
            $i = 0;
            while($i<$num){
                $j=$num-1;
                while($j>$i){
                    echo "* ";
                    $j--;
                }
                echo "<br>";
                $i++;
            }
            echo '<br>';
        }
        printStarts(5);
        
    ?>
</body>
</html>