<html>
    <head>
        <title></title>
    </head>
    <body>
    <?php
        $num = 5;
        $fact = 1;
        $i = $num;
        while($i > 0){
            $fact *= $i;
            $i = $i-1;
        }
        echo "Using While Loop, Factorial of $num is $fact";
    ?>
    <br />
    <?php
        $num = 6;
        $fact = 1;
        $i=$num;
        do {
            $fact *= $num;
            $num = $num - 1;
        } while ($num > 0);
        echo "Using Do-While Loop, Factorial of $i is = $fact "; 

    ?>
    <br />
    <?php  
        $num = 7;  
        $fact = 1;  
        for ($i=$num; $i > 0; $i--){  
            $fact *= $i;  
        }  
        echo "Using For Loop, Factorial of $num is $fact";  
    ?> 

    </body>
</html>