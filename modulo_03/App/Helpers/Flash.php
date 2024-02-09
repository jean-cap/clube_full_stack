<?php

function setFlash($name, $message)
{
    if (!isset($_SESSION['flash'][$name])) {
        $_SESSION['flash'][$name] = $message;
    }
}

function getFlash($name, $type = 'danger')
{
    $flash = '';
    if (isset($_SESSION['flash'][$name])) {
        $flash = "<div class='alert alert-{$type} alert-dismissible fade show' role='alert'>";
        $flash .= $_SESSION['flash'][$name];
        $flash .= "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
        $flash .= "</div>";

        unset($_SESSION['flash'][$name]);
    }
    return $flash;
}
