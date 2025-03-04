<?php

use Discord\WebSockets\Intents;

return [

    /*
    |--------------------------------------------------------------------------
    | Discord Token
    |--------------------------------------------------------------------------
    |
    | Here you may specify your Discord bot token. You can find it under the
    | "Bot" section of your Discord application. Make sure to keep this
    | token private and never share it with anyone for security.
    |
    */

    'token' => env('DISCORD_TOKEN', ''),

    /*
    |--------------------------------------------------------------------------
    | Gateway Intents
    |--------------------------------------------------------------------------
    |
    | Here you may specify the gateway intents for your Discord bot. This
    | will tell Discord what events your bot should receive. Intents can be
    | enabled in the Discord developer application portal under:
    |
    | Settings > Bot > Privileged Gateway Intents
    |
    */

    'intents' => Intents::getDefaultIntents() | Intents::MESSAGE_CONTENT | Intents::GUILD_MEMBERS,

    /*
    |--------------------------------------------------------------------------
    | Command Prefix
    |--------------------------------------------------------------------------
    |
    | Here you may specify the command prefix for the Discord bot. This
    | prefix will be used to distinguish commands from regular chat
    | messages. To use mentioning the bot as a prefix, use "@mention".
    | To use multiple prefixes, you may pass an array instead.
    |
    */

    'prefix' => env('DISCORD_COMMAND_PREFIX', '!'),

    /*
    |--------------------------------------------------------------------------
    | Additional DiscordPHP Options
    |--------------------------------------------------------------------------
    |
    | Here you may specify any additional options for the DiscordPHP client.
    | These options will be passed directly to the DiscordPHP client.
    |
    | For more information, see the DiscordPHP documentation:
    |   ↪ <https://discord-php.github.io/DiscordPHP/#basics>
    |
    */

    'options' => [
        'loadAllMembers' => true,
        'storeMessages' => false,
        'retrieveBans' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | HTTP Server
    |--------------------------------------------------------------------------
    |
    | The Laracord HTTP server allows you to receive and respond to HTTP
    | requests from the bot at the specified address/port. This can be useful
    | for creating a RESTful API for your bot.
    |
    | The HTTP server is automatically started when a `routes.php` file is
    | present and contains valid routes. You can override this behavior by
    | setting this option to `false`.
    |
    */

    'http' => env('HTTP_SERVER', ':8080'),

    /*
    |--------------------------------------------------------------------------
    | Timestamp Format
    |--------------------------------------------------------------------------
    |
    | Here you may specify the timestamp format for the Discord bot. This
    | format will be used when formatting console output. You can set this
    | to `false` to disable timestamps.
    |
    */

    'timestamp' => 'h:i:s A',

    /*
    |--------------------------------------------------------------------------
    | Bot Admins
    |--------------------------------------------------------------------------
    |
    | Here you may manually specify bot admins without using the User model.
    | These users will have access to all bot admin commands. User's must
    | be specified by their Discord user ID.
    |
    */

    'admins' => [
        //
    ],

];
