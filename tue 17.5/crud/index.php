<?php require 'config/connect.php'; ?>

<?php 
  $stm=$dbh->prepare("SELECT * FROM employees");
  $stm->execute();
  $edata=$stm->fetchAll(PDO::FETCH_ASSOC);
  print_r($edata);
?>




<?php if(!empty($edata)): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/8fdd3e44f7.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <br>
    <div><h1 style="display:inline-block;">Employees Details</h1>
    <button>Add new employee</button></div>
    
<table class="table table-success table-striped-columns">
    <th>#</th>
    <th>Name</th>
    <th>Address</th>
    <th>Salary</th>
    <th>Action</th> 

    
    <?php foreach($edata as $employee): ?>
        <?php echo "<tr><td>" . $employee['id'] . "</td>
                    <td>" . $employee['ename'] . "</td>
                    <td>" . $employee['address'] . "</td>
                    <td>" . $employee['salary'] . "</td>
                    <td style='text-align:center;'>
                    <form>
                    <button style='border: none;background-color: rgb(0 0 0 / 0%);'><i class='fa-solid fa-eye'></i></button>
                    <button style='border: none;background-color: rgb(0 0 0 / 0%);'><i class='fa-solid fa-pencil'></i></button>
                    <button style='border: none;background-color: rgb(0 0 0 / 0%);'><i class='fa-solid fa-square-minus'></i></button>
                    </form>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </td></tr>";
        ?>
          



    <?php endforeach; ?>
    

</table>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>
<?php endif; ?>