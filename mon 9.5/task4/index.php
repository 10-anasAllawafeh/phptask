<?php
if (isset($_POST['submit'])) {
 
	switch($_POST['day']) 
    {
        case 'Monday':
        echo 'Laugh on Monday, laugh for danger <br><br> <a href="index.php">back</a>';
        break;
    
        case 'Tuesday':
        echo 'Laugh on Tuesday, kiss a stranger <br><br> <a href="index.php">back</a>';
        break;

        case 'Wednesday':
        echo 'Laugh on Wednesday, laugh for a letter <br><br> <a href="index.php">back</a>';
        break;

        case 'Thursday':
        echo 'Laugh on Thursday, something better <br><br> <a href="index.php">back</a>';

        case 'Friday':
        echo 'Laugh on Friday, laugh for sorrow <br><br> <a href="index.php">back</a>';

        case 'Saturday':
        echo 'Laugh on Saturday, joy tomorrow <br><br> <a href="index.php">back</a>';
    

        default:
        echo 'wrong input <br><br> <a href="index.php">back</a>';
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