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
        break;

        case 'Friday':
        echo 'Laugh on Friday, laugh for sorrow <br><br> <a href="index.php">back</a>';
        break; 

        case 'Saturday':
        echo 'Laugh on Saturday, joy tomorrow <br><br> <a href="index.php">back</a>';
        break;

        default:
        echo 'wrong input <br><br> <a href="index.php">back</a>';
        break;
    }
 
} else {
 
?>
	<h2>Day of the Week</h2>
	<p>What Day is your favorite?</p>
    <form action="index.php" method="post">
    <select name="day" id="">
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
    </select>

	<input type="submit" name="submit"/>
    </form>
 
<?php 
 
} 	 
 
 
?>