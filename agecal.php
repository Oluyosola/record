<?php
$dob = new DateTime('2012-04-04');
$today = new DateTime('now');

echo $age = $dob->diff($today)->y;
                 
                ?>