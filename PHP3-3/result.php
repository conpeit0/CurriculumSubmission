
<?php
$num = $_GET['num'];
$today=date("Y/m/d", time());
$str = strlen($num);
$count = mt_rand(0,$str-1);

$result = substr($num, $count, 1);
if ( $result==0)
{
    $fortune="凶";
}
elseif ($result<=3)
{
    $fortune="小吉";
}
elseif ($result<=6)
{
    $fortune="中吉";
}
elseif ($result<=8)
{
    $fortune="吉";
}
else
{
    $fortune="大吉";
}

echo ("$today の運勢は");
echo "<br>";
echo ("選ばれた数字は$result");
echo "<br>";
echo $fortune ;
?>