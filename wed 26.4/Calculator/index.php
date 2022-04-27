<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <Form method="POST">
        Operator <input type="numfmt_set_symbol"  name="operator"> <br><br>

        first number <input type="number" name="x"> <br><br>

        second number <input type="number" name="y"> <br><br>
        <button type="submit">Calculate</button>
    </Form>

    <?php
          
          $x=$_POST["x"];
          $y=$_POST["y"];
          $operator=$_POST["operator"];
          $res=null;

          if ($operator == "*")
          {
              $res=$x*$y;
              echo "The result is : $res";

          }
          else if ($operator == "/")
          {
              $res=$x/$y;
              echo "The result is : $res";

          }
          else if ($operator == "+")
          {
              $res=$x+$y;
              echo "The result is : $res";

          }
          else if ($operator == "-")
          {
              $res=$x-$y;
              echo "The result is : $res";

          }
          else 
          {
              echo "wrong type";
          }




          


    
    ?>
</body>
</html>