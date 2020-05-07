<?php

//require_once 'vendor/Autoloader.php';

$reflectionClass = new ReflectionClass(\App\Controller\FilesController::class);
foreach ($reflectionClass->getMethods() as $method) {
    $docComment = $method->getDocComment();
    preg_match('/@Route\("(?<path>\/*[a-z]*.[a-z]*)"\)/', $docComment, $matches);
    if ($matches['path'] === $_SERVER['REQUEST_URI']) {
        $method->invoke($reflectionClass->newInstance());
        break;
    }
}
