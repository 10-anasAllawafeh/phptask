<?php
	$arr=['Automobile', 'Jet', 'Ferry', 'Subway'];

if (!isset($_POST['submit'])) {
 
    if(!empty($_POST['name'])) array_push($arr, $_POST['name']);
    echo 'Travel takes many forms, whether across town, across the country, or around the world. Here is a list of some common modes of transportation: <ul>';
    foreach($arr as $trans)
    {
        echo '<li>'. $trans .'</li>';
    } 
    
    echo '</ul> <br>
    <h2>Insert another Transpotation method ?</h2>
    <form action="" method="post">
	<input type="text" name="name" />
	<input type="submit" name="submit" value="add" />
    </form>';
    $arr;
} else {
 
?>

<?php 
    if(!empty($_POST['name'])) array_push($arr, $_POST['name']);
    echo 'Travel takes many forms, whether across town, across the country, or around the world. Here is a list of some common modes of transportation: <ul>';
    foreach($arr as $trans)
    {
        echo '<li>'. $trans .'</li>';
    } 
    
    echo '</ul> <br>
    <h2>Insert another Transpotation method ?</h2>
    <form action="" method="post">
	<input type="text" name="name" />
	<input type="submit" name="submit" value="add" />
    </form>';
    $arr;
 ?>
 
<?php 
 
} 	 
 
 
?>