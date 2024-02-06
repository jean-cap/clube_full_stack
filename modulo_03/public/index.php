<?php

require 'bootstrap.php';

try {
    router();
} catch (Exception $e) {
    dump($e->getMessage());
}
