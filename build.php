#!/usr/bin/php
<?php
chdir(__DIR__ .'/vendor/hcatlin/sassc');

// Compile sassc binary
passthru('SASS_LIBSASS_PATH='. __DIR__ .'/vendor/hcatlin/libsass make');

// move it to bin dir
rename('bin/sassc', __DIR__ .'/bin/sassc');
