<?php

function isAssociativeArray(array $arr): bool
{
    return array_keys($arr) !== range(0, count($arr) - 1);
}