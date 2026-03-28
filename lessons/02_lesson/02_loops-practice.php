<?php

$num = 10;
// while($num < 15) {
//     echo $num . '<br>';
//     $num++;
//     }

// do {
//     echo $num;
// } while($num > 20);

// for ($i=0; $i<10; $i++) {
//     if($i == 3) {
//         continue;
//     }
//     echo $i . "<br>";
// }

$arr = [1,2,3];
foreach ($arr as $key=>$value) {
    echo $key. ' ' .$value . '<br>';
}

$arr2 = ['dog'=>'rex', 'cat'=>'barsik'];
foreach ($arr2 as $key=>$value) {
    echo $key. ' ' .$value . '<br>';
}

?>