<?php

use Discord\WebSockets\Intents;

return [

    /*
    |--------------------------------------------------------------------------
    | Discord Bot Description
    |--------------------------------------------------------------------------
    |
    | Here you may specify the description of your Discord bot. This will be
    | used when the bot is mentioned in chat, or when you run the "servers"
    | command. Change this to anything you like.
    |
    */

    'description' => env('DISCORD_BOT_DESCRIPTION', 'The Laracord Discord Bot.'),

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
    | messages. You may change this to anything you like.
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
    ],

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
    | Additional Commands
    |--------------------------------------------------------------------------
    |
    | Here you may specify any additional commands for the Discord bot. These
    | commands will be loaded in addition to the commands automatically loaded
    | in your project. By default, the Laracord-provided help command is
    | is registered here.
    |
    */

    'commands' => [
        Laracord\Commands\HelpCommand::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Additional Services
    |--------------------------------------------------------------------------
    |
    | Here you may specify any additional services to run asynchronously
    | alongside the Discord bot. These services will be loaded in addition
    | to the services automatically loaded from your project.
    |
    */

    'services' => [
        //
    ],

];
