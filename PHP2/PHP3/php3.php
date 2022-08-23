<?php
$number=1;
for ($number=1; $number<101; $number++)
{
    if ($number%3==0 && $number%5==0)
    {
        echo ('FizzBuzz!!');
    } 
    else if ($number%5==0)
    {
        echo ('Buzz!');
    }
    else if ($number%3==0) 
    {
        echo ('Fizz!');
    }
    else 
    {
        echo $number ;
    }
}
?>