<?php
/**
 * Created by PhpStorm.
 * User: rakib
 * Date: 1/27/2020
 * Time: 10:34 PM
 */

class TriangleTest {
    public function index()
    {
        //get 3 sides values
        $first = readline("first value: ");
        $sec = readline("second value: ");
        $third = readline("third value: ");
        //a^2 = b^2+c^2+2bcCOSA
        //pow($first, 2) = pow($sec, 2) + pow($third, 2) + 2 * $sec * $third* COS A;
        $A = acos((pow($first, 2) - pow($sec, 2)- pow($third, 2)) / (2* $sec * $third));


        //get angel B
        //SINA/a = SINB/b
        //SIN$A/$first = SIN$B/$sec
        $B = asin((sin($A) / $first) * $sec);
        //the rest is C
        $C = 180 - ($A+$B);

        return [$A, $B, $C];
    }
}

$val = new TriangleTest();
echo $val->index()[0];