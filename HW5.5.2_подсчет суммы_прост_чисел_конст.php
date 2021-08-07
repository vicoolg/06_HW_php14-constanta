<?php
$sum = 0;
$count = 0; 

for ($n = 1; $n <= 600; $n++) {
        $prime = true;
    if($n==1 or $n==0) {
        $prime = false;
    }
        for($d=2; $d*$d<=$n; $d++)
            { 
                if($n%$d==0) {
                    $prime = false;
                }
            }
        
        define("COUNT_SIMPLE_NUM",100); 
    if ($prime and $count < COUNT_SIMPLE_NUM) {  
        $count++;
        echo $count. PHP_EOL;
        $sum = $sum + $n;
        echo $n.PHP_EOL;
    }
    
}
echo $sum . PHP_EOL;



// $n = 100 ; // Само число до которого нужно вывести все простые числа
//  $f = 0 ; // Начальное значение счётчика -числа делителей
//  $k=1; // Начальное значение параметра $k для цикла while\\ количество простіх чисел
//  $e=1; //

// // while ($k !== $n) {
// //     for ($e ; $e <= $k ; $e++) {
//         for ($i=1 ; $i <= $e ; $i++) {
//             if ($e % $i == 0) {
//                   $f++ ;
//             }
//         }
//     //         if ($f<=2) {
//     //              echo $e, "\n" ;
    //         }
    // $f = 0 ;
//     }
// $k++;   
// }                   

// $my_array = range(1,100);

// function simple_num($my_array) {
// $sum_simple = 0;
// $i= 2;
// foreach ($my_array as $elem) {
//     if ( $elem % $i ==0) {
//     }
//     else {
//          $sum_simple = $sum_simple + $elem;
//          $i++; 
//      }
        
//      } echo $sum_simple;
//     }
//     simple_num($my_array);
