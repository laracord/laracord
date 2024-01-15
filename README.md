# Laracord

Laracord is a micro-framework that provides a powerful starting point for your next Discord bot.

Build functional, elegant bots harnessing the full power of [Laravel](https://laravel.com/) alongside [DiscordPHP](https://github.com/discord-php/DiscordPHP).

![Screenshot](https://i.imgur.com/yW2vpPR.png)

## Requirements

Make sure all dependencies have been installed before moving on:

- [PHP](https://secure.php.net/manual/en/install.php) >= 8.1
- [Composer](https://getcomposer.org/download/)

## Getting Started

Start by creating a Laracord project:

```sh
composer create-project laracord/laracord:dev-main
cd laracord
```

In order to run the Bot, you will have to create a Application using the [Discord Developer Portal](https://discord.com/developers/applications) and obtain a **bot token**.

By default, the Bot will also require you enable the necessary [Intents](https://discord.com/developers/docs/topics/gateway#gateway-intents). These can be found and enabled in the developer portal under `Settings > Bot > Privileged Gateway Intents`.

Once you obtain a token, you can configure it inside of `.env` or `config/discord.php`.

## Usage

Out of the box, Laracord includes a simple `!ping` command to test your bot with a simple response.

Creating your own command is simple and can be generated using the `laracord` binary:

```sh
php laracord make:command Example
```

To boot your bot, simply run `laracord` with no arguments passed:

```sh
php laracord
```

For convenience, Laracord comes with a console command to set a specified user as admin using their Discord ID:

```sh
php laracord bot:admin <id>
```

To view all built-in console commands, you can run the `list` command:

```sh
php laracord list
```

## Building for Production

To build your bot for production, simply run the `app:build` command:

```sh
php laracord app:build
```

Additional documentation on `app:build` can be found in the [Laravel Zero docs](https://laravel-zero.com/docs/build-a-standalone-application).

## Additional Documentation

Laracord currently lacks it's own documentation, but you can find the documentation of the packages/frameworks it utilizes below to learn more in the mean time:

- [DiscordPHP](https://discord-php.github.io/DiscordPHP/)
- [Laravel Zero](https://laravel-zero.com/docs)
- [Laravel](https://laravel.com/docs)

You may also be interested in the underlying [Laracord Framework](https://github.com/laracord/framework) source code to get a better understanding of existing functionality until proper documentation is written.

## Bug Reports

If you discover a bug in Laracord, please [open an issue](https://github.com/laracord/laracord/issues).

## Contributing

Contributing whether it be through PRs, reporting an issue, or suggesting an idea is encouraged and appreciated.

## License

Laracord is provided under the [MIT License](LICENSE.md).
