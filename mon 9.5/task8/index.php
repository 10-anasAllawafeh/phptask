<?php

$arr=['Tokyo', 'Japan', 'Mexico City', 'Mexico', 'New York City', 'USA', 'Mumbai', 'India', 'Seoul', 'Korea', 'Shanghai', 'China', 'Lagos', 'Nigeria', 'Buenos Aires', 'Argentina', 'Cairo', 'Egypt', 'London', 'England'];

$cities=[];
$countries=[];

for ($i=0; $i < count($arr) ;) {
    array_push($cities, $arr[$i]); 
    $i = $i+2;
}
for ($i=1; $i < count($arr) ;) {
    array_push($countries, $arr[$i]); 
    $i = $i+2;
}

$choises=array_combine($countries,$cities);

// print_r(key($choises));


if (!isset($_post['submit'])) 
{
// print_r(key($choises));
    foreach($choises as $key => $value)
    {
        if ($_POST['name'] == $value) {
            print_r($value);
            echo ' is in ';
            print_r($key);
            break;
        }
    }

    // switch($_POST['name']) 
    // {
    //     case 'Tokyo':
    //         echo $choises['Japan'].' is in ' . print_r(key($choises)) . '<br><br> <a href="index.php">back</a>';
    //         break;
    
    //     case 'Mexico City':
    //         echo $choises['Mexico'].' is in ' . print_r(key($choises)) . '<br><br> <a href="index.php">back</a>';
    //         break;

    //     case 'New York City':
    //         echo $choises['USA'].' is in ' . print_r(key($choises)) . '<br><br> <a href="index.php">back</a>';
    //         break;

    //     case 'Mumbai':
    //         echo $choises['India'].' is in ' . print_r(key($choises)) . '<br><br> <a href="index.php">back</a>';
    //         break;

    //     case 'Seoul':
    //         echo $choises['Korea'].' is in ' . print_r(key($choises)) . '<br><br> <a href="index.php">back</a>';
    //         break;

    //     case 'Shanghai':
    //         echo $choises['China'].' is in ' . print_r(key($choises)) . '<br><br> <a href="index.php">back</a>';
    //         break;

    //     case 'Lagos':
    //         echo $choises['Nigeria'].' is in ' . print_r(key($choises)) . '<br><br> <a href="index.php">back</a>';
    //         break;

    //     case 'Buenos Aires':
    //         echo $choises['Argentina'].' is in ' . print_r(key($choises)) . '<br><br> <a href="index.php">back</a>';
    //         break;
        
    //     case 'Cairo':
    //         echo $choises['Egypt'].' is in ' . print_r(key($choises)) . '<br><br> <a href="index.php">back</a>';
    //         break;

    //     case 'London':
    //         echo $choises['England'].' is in ' . print_r(key($choises)) . '<br><br> <a href="index.php">back</a>';
    //         break;
    

    //     default:
    //     echo 'wrong input <br><br> <a href="index.php">back</a>';
    //     break;
    // }
} else {
 
    ?>
        <h2>cities and countries</h2>
        <p>What city is your favorite?</p>
        <form action="index.php" method="post">

        <select name="name" >
            <option value="Tokyo">Tokyo</option>
            <option value="Mexico City">Mexico City</option>
            <option value="New York City">New York City</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Seoul">Seoul</option>
            <option value="Shanghai">Shanghai</option>
            <option value="Lagos">Lagos</option>
            <option value="Buenos Aires">Buenos Aires</option>
            <option value="Cairo">Cairo</option>
            <option value="London">London</option>
        </select>
        <br><br>
        <input type="submit" name="submit"/>
        </form>
     
    <?php 
     
    } 	 
     
     
    ?>