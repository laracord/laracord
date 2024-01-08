<?php

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
    | Help Command
    |--------------------------------------------------------------------------
    |
    | Here you may specify whether the help command should be enabled. This
    | command will display a list of all available commands. You may
    | change this to `false` if you don't want to use this.
    |
    */

    'help' => true,

];
