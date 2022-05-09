<?php 
         if (!isset($_POST['submit'])) 
         {
            $d='block';
         }
         else if($_POST['day'] == 'monday')
         {
             $d='none';
             echo 'Your favourite city is :'.$_POST['city'];
         }
?>
        
        
        
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body> -->

<?php  
// if(!isset($_POST['submit']))
// {
//      echo
//     `<form method="Post" action="index.php">
//          Pick a day <input type="text" name="day">
//          <br><br>
//         <button type="submit" name="submit">Submit</button>
//     </form>`;
// }
// else{
//     if ($_POST['day'] = 'Monday') {
//         echo 'Laugh on Monday, laugh for danger';
//     }
//     elseif ($_POST['day'] = 'Tuesday') {
//         echo 'Laugh on Tuesday, kiss a stranger';
//     }
//     elseif ($_POST['day'] = 'Wednesday') {
//         echo 'Laugh on Wednesday, laugh for a letter';
//     }
//     elseif ($_POST['day'] = 'Thursday') {
//         echo 'Laugh on Thursday, something better';
//     }
//     elseif ($_POST['day'] = 'Friday') {
//         echo 'Laugh on Friday, laugh for sorrow';
//     }
//     elseif ($_POST['day'] = 'Saturday') {
//         echo 'Laugh on Saturday, joy tomorrow';
//     }
// }
?>

</body>
</html>


<?php
if (isset($_POST['submit'])) {
 
	if ($_POST['day'] = 'Monday') {
        echo 'Laugh on Monday, laugh for danger';
    }
    elseif ($_POST['day'] = 'Tuesday') {
        echo 'Laugh on Tuesday, kiss a stranger';
    }
    elseif ($_POST['day'] = 'Wednesday') {
        echo 'Laugh on Wednesday, laugh for a letter';
    }
    elseif ($_POST['day'] = 'Thursday') {
        echo 'Laugh on Thursday, something better';
    }
    elseif ($_POST['day'] = 'Friday') {
        echo 'Laugh on Friday, laugh for sorrow';
    }
    elseif ($_POST['day'] = 'Saturday') {
        echo 'Laugh on Saturday, joy tomorrow';
    }
    else{
        echo 'wrong input';
    }
 
} else {
 
?>
	<h2>Day of the Week</h2>
	<p>What Day is your favorite?</p>
<form action="" method="post">
	<input type="text" name="day" />
	<input type="submit" name="submit"/>
</form>
 
<?php 
 
} 	 
 
 
?>