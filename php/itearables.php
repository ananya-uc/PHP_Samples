<?php

function onetothree()
{
  for($i=1;$i<=3;$i++)
 {
  yield $i;
}
}
$generator=onetothree();
foreach($generator as $v)
 echo $v;
?>
