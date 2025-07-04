<?php

spl_autoload_register(function ($className) {
    $paths = [
        '../clase/controller/',
        '../clase/model/',
        '../clase/view/',
    ];

    foreach ($paths as $path) {
        $file = $path . $className . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});
