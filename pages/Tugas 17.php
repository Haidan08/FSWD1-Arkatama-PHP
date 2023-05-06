<?php

//PERTAMA
//pattern1
//function upsideLeftTriangle() {
//    for ($y=1; $y <= 5 ; $y++) { 
//        for ($x=1; $x <= $y ; $x++) { 
//            echo "* ";
//        }
//        echo "<br>";
//    }
//}

//pattern2
//function dowsideLeftTriangle() {
//    for ($i=5; $i >= 0 ; $i--) { 
//        for ($j=0; $j <= $i ; $j++) { 
//            echo "* ";
//        }
//        echo "<br>";
//    }
//}

//pattern3
//function upsideRightTriangle() {
//    for ($a=1; $a <= 5 ; $a++) { 
//        for ($b=1; $b <= 5-$a ; $b++) {
//            echo str_repeat('&nbsp;', 3);
//        }
//        for ($b=1; $b <= $a ; $b++) { 
//            echo "*  ";
//        }
//        echo "<br>";
//    }
//}

//pattern4
//function downsideRightTriangle() {
//    for ($c = 5; $c >= 1; $c--) {
//        for ($r = 1; $r <= 5-$c; $r++) {
//            echo str_repeat('&nbsp;', 3);
//        }
//        for ($r = 1; $r <= $c; $r++) {
//            echo "* ";
//        }
//        echo "<br>";
//    }
//}

//KEDUA

//pattern1
function upsideLeftTriangle() {
    for ($y=1; $y <= 5 ; $y++) { 
        for ($x=1; $x <= $y ; $x++) { 
            echo "#";
        }
        echo "<br>";
    }
}

//pattern2
function dowsideLeftTriangle() {
    for ($i=8; $i >= 3 ; $i--) { 
        for ($j=3; $j <= $i ; $j++) { 
            echo "@";
        }
        echo "<br>";
    }
}

//pattern3
function upsideRightTriangle() {
    for ($a=2; $a <= 5 ; $a++) { 
        for ($b=2; $b <= 5-$a ; $b++) {
            echo str_repeat('&nbsp;', 3);
        }
        for ($b=1; $b <= $a ; $b++) { 
            echo "&";
        }
        echo "<br>";
    }
}

//pattern4
function downsideRightTriangle() {
    for ($c = 9; $c >= 2; $c--) {
        for ($r = 2; $r <= 5-$c; $r++) {
            echo str_repeat('&nbsp;', 3);
        }
        for ($r = 1; $r <= $c; $r++) {
            echo "+";
        }
        echo "<br>";
    }
}

function cetak($number) {
    switch ($number) {
        case '1':
            echo "Triangle upside left. <br>";
            upsideLeftTriangle();
            break;
        case '2':
            echo "Triangle downside left. <br>";
            dowsideLeftTriangle();
            break;
        case '3':
            echo "Triangle upside right. <br>";
            upsideRightTriangle();
            break;
        case '4':
            echo "Triangle downside right. <br>";
            downsideRightTriangle();
            break;
    
        default:
            echo "Wrong menu.";
            break;
    }
}

cetak(1);
cetak(2);
cetak(3);
cetak(4);


?>