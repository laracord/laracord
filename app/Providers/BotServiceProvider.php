<?php

namespace App\Providers;

use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Router;
use Laracord\Commands\HelpCommand;
use Laracord\Laracord;
use Laracord\LaracordServiceProvider;

class BotServiceProvider extends LaracordServiceProvider
{
    /**
     * Configure the bot instance.
     */
    public function bot(Laracord $bot): Laracord
    {
        return $bot
            ->plugins([
                //
            ])
            ->registerCommands([
                HelpCommand::class,
            ])
            ->withRoutes(function (Router $router) {
                //
            })
            ->withMiddleware(function (Middleware $middleware) {
                //
            });
    }
}
