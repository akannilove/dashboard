<?php

/** require / require_once / include / include_once */

require_once 'file.php';

$x++;

echo $x . '<br />';

require_once 'file.php';

echo $x . '<br />';

echo 'Hello world';