<?php declare(strict_types = 1);

namespace Console\Output;

use Console\Output\Exception\Background as BackgroundException;
use Console\Output\Exception\Option as OptionException;
use Console\Output\Exception\Text as TextException;
use Console\Output\Modifier\Background;
use Console\Output\Modifier\Option;
use Console\Output\Modifier\Text;

class Console
{
    /**
     * Methods outputs text to console using colors
     *
     * @param string      $message
     * @param string|null $color
     *
     * @see Text
     *
     * @param string|null $background
     *
     * @see Background
     *
     * @param string|null $option
     *
     * @see Option
     *
     * @throws \Console\Output\Exception\Option
     * @throws \Console\Output\Exception\Background
     * @throws \Console\Output\Exception\Text
     */
    public static function log(
        string $message,
        string $color = null,
        string $background = null,
        string $option = null): void
    {
        $log = '';

        if (null !== $color) {
            if (!Text::isValid($color)) {
                throw new TextException('Invalid text color received');
            }
            $log .= "\033[" . Text::getSymbol($color) . 'm';
        }

        if (null !== $background) {
            if (!Background::isValid($background)) {
                throw new BackgroundException('Invalid background color received');
            }
            $log .= "\033[" . Background::getSymbol($background) . 'm';
        }

        if (null !== $option) {
            if (!Option::isValid($option)) {
                throw new OptionException('Invalid option received');
            }
            $log .= "\033[" . Option::getSymbol($option) . 'm';
        }

        if ('' !== $log) {
            echo $log . $message . "\033[0m";

            return;
        }

        echo $message;
    }

    /**
     * Plays a bell sound in console (if available)
     *
     * @param  integer $count Bell play count
     *
     * @return void Bell play string
     */
    public static function bell($count = 1): void
    {
        echo str_repeat("\007", $count);
    }
}