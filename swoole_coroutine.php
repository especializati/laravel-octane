<?php

use Swoole\Coroutine as Co;

Co\run(function()
{
    go(function()
    {
        // Runs immediately
        var_dump('1');
    });

    go(function()
    {
        // Waits once second before continuing
        Co::sleep(1);
        var_dump('2');
    });

    go(function()
    {
        // Runs immediately
        var_dump('3');
    });
});

echo "Outside any Coroutine Context.\n";
