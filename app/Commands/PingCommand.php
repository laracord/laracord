<?php

namespace App\Commands;

use Laracord\Commands\Command;

class PingCommand extends Command
{
    /**
     * The Discord command name.
     *
     * @var string
     */
    protected $name = 'ping';

    /**
     * The Discord command description.
     *
     * @var string|null
     */
    protected $description = 'Ping? Pong!';

    /**
     * Execute the Discord command.
     *
     * @param  \Discord\Parts\Channel\Message  $message
     * @param  array  $args
     * @return mixed
     */
    public function handle($message, $args)
    {
        return $this->message(
            $message->channel,
            'Ping',
            'Pong!',
            ['Response time' => (string) $message->timestamp->diff()->f]
        );
    }
}
