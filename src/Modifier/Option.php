<?php declare(strict_types = 1);


namespace Console\Modifier;


class Option extends Modifier
{
    public CONST UNDERLINE = 'underline';

    public CONST BLINK     = 'blink';

    public CONST REVERSE   = 'reverse';

    public CONST HIDDEN    = 'hidden';

    public static $options = [
        self::UNDERLINE => '4',
        self::BLINK     => '5',
        self::REVERSE   => '7',
        self::HIDDEN    => '8',
    ];

    /**
     * Returns specific symbol for output modification in console
     *
     * @param string $option
     *
     * @return string|null
     */
    public static function getSymbol(string $option): ?string
    {
        if (self::isValid($option)) {
            return self::$options[$option];
        }

        return null;
    }

    /**
     * Method validates whether ot not color is valid
     *
     * @param string $option
     *
     * @return bool
     */
    public static function isValid(string $option): bool
    {
        $constants = self::getAll(__CLASS__);

        return \in_array($option, $constants, true);
    }
}