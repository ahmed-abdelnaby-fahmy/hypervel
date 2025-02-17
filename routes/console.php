<?php

declare(strict_types=1);

use LaravelHyperf\Support\Facades\Artisan;
use LaravelHyperf\Support\Facades\Schedule;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('hello', function () {
    $this->comment('Laravel-Hyperf is awesome!');
})->describe('This is a demo closure command.');

// Schedule::command('hello')->everyFiveSeconds();
