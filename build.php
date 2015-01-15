#!/usr/bin/php
<?php

try {
    if (false === chdir(__DIR__ . '/vendor/sass/sassc')) {
        throw new Exception('error changing into '. __DIR__ . '/vendor/sass/sassc');
    }

    // Compile sassc binary
    passthru('SASS_LIBSASS_PATH=' . __DIR__ . '/vendor/sass/libsass make', $return);

    if (0 !== $return) {
        throw new Exception('error compiling sassc');
    }

    // move it to bin dir
    if (false === rename('bin/sassc', __DIR__ . '/bin/sassc')) {
        throw new Exception('error moving bin/sassc to '. __DIR__ .'/bin/sassc');
    }

    echo 'Build complete !'. PHP_EOL;
} catch (Exception $exception) {
    echo 'Build failed: '. $exception->getMessage() . PHP_EOL;
}
