<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>weather</title>
</head>
<body>
    <h1>Weather Condition</h1>


    <?php 
         $array=['rain', 'sunshine', 'clouds', 'hail', 'sleet', 'snow', 'wind'];

         echo 'We have seen all kinds of weather this month. At the beginning of the month, we had ';
         print_r($array[5]);
         echo  ' and ';
         print_r($array[6]);
         echo '. Then came ';
         print_r($array[1]);
         echo ' with a few ';
         print_r($array[2]);
         echo ' and some ';
         print_r($array[0]);
         echo '. At least we did not get any ' ;
         print_r($array[3]);
         echo ' or ' ;
         print_r($array[4]);
    ?>
</body>
</html>