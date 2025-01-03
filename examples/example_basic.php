<?php

echo '>>> example for array <<<' . PHP_EOL;
$tasks = [
  0 => 'Task 1',
  1 => 'Task 2',
  2 => 'Task 3'
];

var_dump($tasks);

$tasks[3] = 'Task 4';

var_dump($tasks);

$values = array_values($tasks);

var_dump($values);