<?php

$y=0;  //  $y is our starting number - in this case 0 - try changing $y.

/* 
   We are using a for loop which lets us declare our loop counter 'i' 
   $i=0 starts our loop counter at 0, we then use the less than operator to see if the loop counter is less than 10.
   If it is less than 10 then the loop will run.
   $i++ is shorthand for $i = $i + 1, so each time through the loop the counter $i will be incremented by 1 until $i reaches 10.
   Try changing the loop counters final value from 10 to 100 or whatever you choose.
*/
for($i=0;$i<10;$i++) { 
    $y += 2; // += is shorthand for $y = $y + 2
}

echo "$y"; // $y will hold our final result to be printed to the terminal