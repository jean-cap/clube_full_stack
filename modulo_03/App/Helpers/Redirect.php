<?php

function redirect($target)
{
    return header("Location: {$target}");
}

function setMessageAndRedirect($name, $message, $redirect)
{
    setFlash($name, $message);
    return redirect($redirect);
}
