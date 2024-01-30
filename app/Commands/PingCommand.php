<?php

namespace App\Commands;

use Laracord\Commands\Command;

class PingCommand extends Command
{
    /**
     * The command name.
     *
     * @var string
     */
    protected $name = 'ping';

    /**
     * The command description.
     *
     * @var string|null
     */
    protected $description = 'Ping? Pong!';

    /**
     * Handle the command.
     *
     * @param  \Discord\Parts\Channel\Message  $message
     * @param  array  $args
     * @return void
     */
    public function handle($message, $args)
    {
        return $this
            ->message()
            ->title('Ping')
            ->content('Pong!')
            ->field('Response time', $message->timestamp->diffForHumans(null, true))
            ->button('GitHub', 'https://github.com/laracord/laracord')
            ->send($message);
    }
}
