<?php
$food = array('fruits' => array('orange', 'banana', 'apple'),
              'veggie' => array('carrot', 'collard', 'pea'));

// recursive count
echo count($food, COUNT_RECURSIVE); // output 8
//var_dump(count($food, COUNT_RECURSIVE));

// normal count
echo count($food); // output 2
//var_dump($food);
?>