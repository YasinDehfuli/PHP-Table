

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
    <link rel="stylesheet" href="table-style.css">

</head>
<body>
<section id="table">

    <table class="table" >
        <thead>
        <tr class="<?php echo 'colorhead'; ?>">
            <th >#</th>
            <th >Price</th>
            <th >Discount<?php
                $Discount = 0.09 ;
                ?></th>
            <th >Final Price</th>
        </tr>
        </thead>
        <tbody>
        <tr class="<?php echo 'color1' ?>">
            <th >1</th>
            <td ><?php
                $num1 = 88000000 ;
                echo number_format ($num1);
                ?></td>
            <td ><?php
                echo $Discount ;
                ?></td>
            <td ><?php
                echo number_format($num1-$num1*$Discount)
                ?></td>
        </tr>
        <tr class="<?php echo 'color2' ?>">
            <th >2</th>
            <td ><?php
                $num2 = 29800000 ;
                echo number_format ($num2);
                ?></td>
            <td ><?php
                echo $Discount ;
                ?></td>
            <td ><?php
                echo number_format($num2-$num2*$Discount)
                ?></td>
        </tr>
        <tr class="<?php echo 'color1' ?>">
            <th >3</th>
            <td ><?php
                $num3 = 14700000 ;
                echo number_format ($num3);
                ?></td>
            <td ><?php
                echo $Discount ;
                ?></td>
            <td ><?php
                echo number_format($num3-$num3*$Discount)
                ?></td>
        </tr>
        <tr class="<?php echo 'color2' ?>">
            <th >4</th>
            <td ><?php
                $num4 = 89650000 ;
                echo number_format ($num4);
                ?></td>
            <td ><?php
                echo $Discount ;
                ?></td>
            <td ><?php
                echo number_format($num4-$num4*$Discount)
                ?></td>
        </tr>
        <tr class="<?php echo 'color1' ?>">
            <th >5</th>
            <td ><?php
                $num5 = 165000000 ;
                echo number_format ($num5);
                ?></td>
            <td ><?php
                echo $Discount ;
                ?></td>
            <td ><?php
                echo number_format($num5-$num5*$Discount)
                ?></td>
        </tr>
        <tr class="<?php echo 'color2' ?>">
            <th >6</th>
            <td ><?php
                $num6 = 1235000000 ;
                echo number_format ($num6);
                ?></td>
            <td ><?php
                echo $Discount ;
                ?></td>
            <td ><?php
                echo number_format($num6-$num6*$Discount)
                ?></td>
        </tr>
        <tr class="<?php echo 'color1' ?>">
            <th >7</th>
            <td ><?php
                $num7 = 9980000000 ;
                echo number_format ($num7);
                ?></td>
            <td ><?php
                echo $Discount ;
                ?></td>
            <td ><?php
                echo number_format($num7-$num7*$Discount)
                ?></td>
        </tr >
        <tr class="<?php echo 'color2' ?>">
            <th >8</th>
            <td ><?php
                $num8 = 3000050000 ;
                echo number_format ($num8);
                ?></td>
            <td ><?php
                echo $Discount ;
                ?></td>
            <td ><?php
                echo number_format($num8-$num8*$Discount)
                ?></td>
        </tr>
        <tr class="<?php echo 'color1' ?>">
            <th >9</th>
            <td ><?php
                $num9 = 7700000 ;
                echo number_format ($num9);
                ?></td>
            <td ><?php
                echo $Discount ;
                ?></td>
            <td ><?php
                echo number_format($num9-$num9*$Discount)
                ?></td>
        </tr>
        <tr class="<?php echo 'color2' ?>">
            <th >10</th>
            <td ><?php
                $num10 = 126600000 ;
                echo number_format ($num10);
                ?></td>
            <td ><?php
                echo $Discount ;
                ?></td>
            <td ><?php
                echo number_format($num10-$num10*$Discount)
                ?></td>
        </tr>

        </tbody>
    </table>

</section>
</body>
</html>