<?php declare(strict_types = 1);

namespace Console;

use Console\Exception\Background as BackgroundException;
use Console\Exception\Option as OptionException;
use Console\Exception\Text as TextException;
use Console\Modifier\Background;
use Console\Modifier\Option;
use Console\Modifier\Text;

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
     * @throws \Console\Exception\Option
     * @throws \Console\Exception\Background
     * @throws \Console\Exception\Text
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
}