<?php
    $num1= $_GET['cxnum1'];
    $num2= $_GET['cxnum2'];
    $num3= $_GET['cxnum3'];

    
        if ($num1 > $num2 && $num1 > $num3){
            echo "O maior número é $num1";
        }if ($num2 > $num1 && $num2 > $num3){
            echo "O maior número é $num2";
        }if ($num3 > $num2 && $num3 > $num1){
            echo "O maior número é $num3";
        }

?>