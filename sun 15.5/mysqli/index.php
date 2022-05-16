<?php 
  include'config/connect.php';
?>
<?php 

// $name=$phone=$price='';



// print_r($phones);

// if (isset($_POST['submit'])) {
    $name=$_POST['name'];    
    $phone=$_POST['phone'];
    $price=$_POST['price'];
// }
$sql="INSERT INTO phones (name, phone, price) VALUES ('$name','$phone','$price')";



// $phones=mysqli_fetch_all(mysqli_query($con,$sql),MYSQLI_ASSOC);

// print_r($phones);

if(mysqli_query($con , $sql)){
    echo 'new record created sucessfuly <hr><br>';
}else{
    echo "error:".$sql."<br>".mysqli_error($con);
}

mysqli_close($con);


?>

