<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 

$string1 = 'Hello';
$string2 = 'world';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php
        echo "$string1 $string2";
        ?>
        </title>
    </head>
    <body>
        <h1 style="color:blue"><center>
        <?php
        echo "$string1 $string2";
        ?>
        </center></h1>
        <br></br>
        <h1 style="color:red"><center>
        <?php
        echo $string1." ".$string2."!"
        ?>
        </center></h1>
    </body>
</html>