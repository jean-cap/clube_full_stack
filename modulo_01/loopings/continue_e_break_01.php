<?php

$names = ['Jean', 'Bianca', 'Nilce'];

for ($i = 0; $i < count($names); $i++) {
    if ($names[$i] === 'Bianca') {
        continue;
    }
    echo $names[$i] . PHP_EOL;
}
