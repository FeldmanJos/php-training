<?php

define('BASEDIR', realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR );

function __autoload($classname) {
    $classname = ltrim($classname, '\\');
    $filename = '';
    $namespace = '';
    if ($lastNrPos = strrpos($classname, ' \\')) {
        $namespace = substr($classname, 0, $lastNrPos);
        $classname = substr($classname, $lastNrPos + 1);
        $filename = str_replace('\\ ', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $filename .= str_replace(' _ ', DIRECTORY_SEPARATOR, $classname) . '.php';

    require BASEDIR . $filename;
}

?>