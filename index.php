<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop PHP</title>
    <style>
        h2{ text-align:center;}
        th{background-color:blue;
           color:white;
        }
        table,td,th{border:solid 1px red;
                   text-align:center;
        }
    </style>
    
</head>
<body>
    <h2>PHP For loop</h2>
    <table style="width:100%;">
        <tr>
            <th>For loop with BREAK</th>
            <th>For loop with CONTINUE</th>
            <th>For loop with STEP</th>
        </tr>
    <td>
        <?php
            
            for($x=0; $x<10; $x++){
                if ($x==5) break;
                echo "$x <br>";
                }
        ?>
    </td>
    <td>
        <?php
        for($x=0; $x<10; $x++){
            if($x==5) continue;
            echo "$x <br>";
            }
            ?>
     </td>
     <td>
        <?php
        for($x=0; $x<110; $x+=10){
            echo $x . "<br>";
        }
        ?>
     </td>

</table> 
<hr>
<h2>PHP While loop</h2>
<table style="width:100%;">
<tr>
    <th>While loop with BREAK</th>
    <th>While loop with CONTINUE</th>
    <th>While loop with STEP</th>
</tr>
 <td>
    <?php
    $i = 0;
    while ($i<10){
        if ($i==5)break;
        echo $i;
        $i++;
        echo "<br>";
       }
    ?>
 </td>

   </td>
    </table>
   <hr>

   <?php
  
     $name = $email = $number = " ";
     $nameErr = $emailErr = $numberErr ="";

   if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    
    if (strtoupper($name)!==$name){
        $nameErr= "Write The block letter";
    }
    if (str_contains($email, "@")){
        $emailErr= "Write the Valid Email";
    }
   } 
    
   ?>

   <h2> PHP validation</h2>
   <form method= "post"; action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span><?php echo $nameErr;?></span>
    <br><br>
    Email: <input type="email" name="email">
    <span></span>
    <br><br>
    Mobile No: <input type="number" name="number">
    <?php echo $numberErr;?>
    <br><br>
    <input type="submit" name="submit" value="Submit"><br><br>
   </form>
   <?php
   echo "<h3>Input Your Information: </h3>";
   echo $name;
   echo "<br><br>";
   echo $email;
   echo "<br><br>";
   echo $number;
?>
<hr>
<h2>Odd & Even </h2>
<?php
echo "Even numbers are divisible by 2" . "<br>" . "Odd numbers are divisible by 3" . "<br>";
?>
<form method="post">
    Enter number: <input type="number" name="number">
    <input type="submit" name="submit" value="Submit">
</form>
<?php
$number =123456789;
if($_POST){
$number = $_POST["number"];
if ($number%2==0){
    echo "$number is Even";
}
else{
    echo "$number is Odd";
}
echo "<br>";
}
?>
<?php
echo "even number: ";
for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

?>

<?php
echo "<br>";
echo "Odd number: ";
for ($i = 0; $i <= 100; $i++) {
    if ($i % 3 == 0 || $i == 1) {
        echo $i . " ";
    }
}
?>
   
</body>
</html>