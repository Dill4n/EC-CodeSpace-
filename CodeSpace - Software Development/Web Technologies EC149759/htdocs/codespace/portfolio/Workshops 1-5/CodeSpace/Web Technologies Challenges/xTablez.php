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