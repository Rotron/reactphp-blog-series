<?php

use React\EventLoop\Factory;
use React\Filesystem\Filesystem;
use React\Filesystem\Node\FileInterface;

require '../vendor/autoload.php';

$loop = Factory::create();
$filesystem = Filesystem::create($loop);

$file = $filesystem->file('test.txt')->rename('new.txt')->then(function(){
    echo 'File was renamed' . PHP_EOL;
});

$loop->run();
