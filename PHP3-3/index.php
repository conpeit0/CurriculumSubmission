
<form action="result.php" method="get">
    <input type="text" name="num"/>
    <br>
    <input type="submit" value="占う" />
</form>   
<?php

$str = strlen($num);
$count = mt_rand(0,$str);
$fortune = substr($num, $count, 1);
?>