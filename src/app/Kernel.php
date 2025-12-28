<?php

namespace App;

use App\Middlewares\IsAuthed;
use App\Middlewares\IsGuest;
use Foundations\Middlewares\Kernel as MiddlewaresKernel;

class Kernel extends MiddlewaresKernel
{
    
    protected static array $globalMiddleware = [

    ];

    protected static array $middlewareAliases = [
        "auth"=> IsAuthed::class,
        "guest"=> IsGuest::class
    ];

}