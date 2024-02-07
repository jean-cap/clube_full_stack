<?php

function redirect($target)
{
    return header("Location: {$target}");
}