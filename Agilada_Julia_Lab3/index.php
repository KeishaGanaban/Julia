<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css"/>
        <title>Lab 3</title>
    </head>
    <body>
        <h1>Basic Calculator</h1>
        <form action="index.php" method="post">
            <div>
                <label for="firstno">First Number</label><br>
                <input type="text" id="firstno" name="first">
            </div>
            <div>
                <label for="secondno">Second Number</label><br>
                <input type="text" id="secondno" name="second">
            </div>
            <div>
                <label>Select Operator</label><br>
                <input type="radio" id="+" name="ops" value="+">
                <label>Add</label>
                <input type="radio" id="-" name="ops" value="-">
                <label>Subtract</label>
                <input type="radio" id="x" name="ops" value="x">
                <label>Multiply</label>
                <input type="radio" id="/" name="ops" value="/">
                <label>Divide</label>
            </div>
            <div>
                <input type="submit" name="enter" value="Enter">
            </div>
        </form>

        <?php
            if(isset($_POST['enter']))
            { 
              $num1 = $_POST['first']; 
              $num2 = $_POST['second']; 
              $opr = $_POST['ops'];
              if(is_numeric($num1) && is_numeric($num2))
              { 
                switch ($opr) {
                    case "+":
                      $tot = $num1 + $num2;
                      echo "Total: $tot";
                      break;
                    case "-":
                      $tot = $num1 - $num2;
                      echo "Total: $tot";                      
                      break;
                    case "*":
                      $tot = $num1 * $num2;
                      echo "Total: $tot";
                      break;
                    case "/":
                      $tot = $num1 / $num2;
                      echo "Total: $tot";
                      break;
                    default:
                      echo "Invalid operation.";
                  }
                
              } 
              else 
              {
                echo"<script> alert(' ENTER VALID NUMBER');</script>";
                } 
            }  
        ?>
       
    </body>
</html>