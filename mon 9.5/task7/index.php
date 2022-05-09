<?php

$arr=[68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78,
68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83];
$sum=0;
foreach ($arr as $value) {
    $sum += $value ;
}
echo ' <br> The average tempreture is : '. $sum/30 . 'Fehrenheit <hr>';

sort($arr);
echo 'Lowest five tempreture are : <br>';
for ($i=0; $i < 5; $i++) { 
    print_r($arr[$i]);
    
        echo '<br>';
    

}

echo ' <hr><br> Highest five tempreture are :<br>';

for ($i=(count($arr)-1); $i >= (count($arr)-5); $i--) { 

    print_r($arr[$i]);
    echo '<br>';

}