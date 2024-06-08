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