<?php

// Falsy
// null      - null
// 0         - integer
// 0.0       - float
// "0"       - string
// ""        - empty string
// array()   - empty array

// Truthy é todo o resto que não é falsy

$result = !!null; // false
$result = !!0; // false
$result = !!0.0; // false
$result = !!"0"; // false
$result = !!""; // false
$result = !![]; // false

var_dump($result);
