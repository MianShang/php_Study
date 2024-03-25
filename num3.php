<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $a =10;
            $b = 15;
            $c = 7;
            
            if($a>$b){
                if($a>$c){
                    $max1 = $a;
                    if($b>$c){
                        $max2 = $b;
                        $max3 = $c;
                    }
                    else{
                        $max2 = $c;
                        $max3 = $b;
                    }
                }
                else{
                    $max1 = $c;
                    $max2 = $a;
                    $max3 = $b;
                }
            }
            else{
                if($a>$c){
                    $max1 = $b;
                    $max2 = $a;
                    $max3 = $c;
                }
                else{
                    if($b>$c){
                        $max1 = $b;
                        $max2 = $c;
                        $max3 = $a;
                    }
                    else{
                        $max1 = $c;
                        $max2 = $b;
                        $max3 = $a;
                    }
                }
            }
           echo"입력된 세 정수 : $a $b $c <br>";
           echo "입력된 정수를 큰 수대로 배열 : $max1 $max2 $max3<br>";
        ?>
    </body>
</html>
