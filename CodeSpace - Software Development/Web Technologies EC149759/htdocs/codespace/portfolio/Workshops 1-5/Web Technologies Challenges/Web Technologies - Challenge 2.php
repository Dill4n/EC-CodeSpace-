<?php

// 1. PHP Function

function vowels2X($str) {
  $vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
  return str_replace($vowels, 'X', $str);
}
$str = "Hello World!\n";
echo vowels2X($str);


// 2. Calculator

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Number 1: <input type="text" name="no1"><br>
    Number 2: <input type="text" name="no2"><br>
    Operator: <input type="text" name="opr"><br>
    <input type="submit" value="Submit">
</form>

<?php
$no1 = $_POST['no1'];
$no2 = $_POST['no2'];
$opr = $_POST['opr'];

function addem($no1, $no2, $opr) {
    
   if ($opr == '+') {
    $sum = $no1 + $no2;
    echo $sum;
   } 
   elseif ($opr == '-') {
    $sum = $no1 - $no2;
    echo $sum;
   } 
   elseif ($opr == '/') {
    $sum = $no1 / $no2;
    echo $sum;
   } 
   if ($opr == '*') {
    $sum = $no1 * $no2;
    echo $sum;
   } 
   
   else {
    echo "Operator not supported.";
   }
    
}

echo "Number 1: $no1 <br>";
echo "Number 2: $no2 <br>";
echo addem($no1, $no2, $opr);
?>

// 3. for Loop

<!DOCTYPE html>
<html>
<body>

<form action="xTablez.php" method="post">
  Enter a number: <input type="number" name="num"><br>
  <input type="submit" value="Generate multiplication table">
</form>
</body>
</html>



<?php

$num = $_POST['num'];

for ($i = 1; $i <= 10; $i++) {
    $result = $num * $i;
    echo "$num x $i = $result <br>";
}

?>

// 4. else Statements

<?php

$age = 22;

if ($age < 13) {
echo "You are a child!";
} elseif ($age > 13 && $age <= 17) {
echo "When you gonna come out your room.";
} elseif ($age >= 18 && $age <= 64) {
    echo "You're a big boi now.";
} else {
   echo "Remember, you're immortal.";
}

?>


?>