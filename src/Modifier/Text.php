<?php declare(strict_types = 1);


namespace Console\Output\Modifier;


class Text extends Modifier
{
    public CONST BOLD         = 'bold';

    public CONST DIM          = 'dim';

    public CONST BLACK        = 'black';

    public CONST DARK_GREY    = 'dark_gray';

    public CONST BLUE         = 'blue';

    public CONST LIGHT_BLUE   = 'light_blue';

    public CONST GREEN        = 'green';

    public CONST LIGHT_GREEN  = 'light_green';

    public CONST CYAN         = 'cyan';

    public CONST LIGHT_CYAN   = 'light_cyan';

    public CONST RED          = 'red';

    public CONST LIGHT_RED    = 'light_red';

    public CONST PURPLE       = 'purple';

    public CONST LIGHT_PURPLE = 'light_purple';

    public CONST BROWN        = 'brown';

    public CONST YELLOW       = 'yellow';

    public CONST LIGHT_GRAY   = 'light_gray';

    public CONST WHITE        = 'white';

    public CONST NORMAL       = 'normal';

    public static $modifier_symbol = [
        self::BOLD         => '1',
        self::DIM          => '2',
        self::BLACK        => '0;30',
        self::DARK_GREY    => '1;30',
        self::BLUE         => '0;34',
        self::LIGHT_BLUE   => '1;34',
        self::GREEN        => '0;32',
        self::LIGHT_GREEN  => '1;32',
        self::CYAN         => '0;36',
        self::LIGHT_CYAN   => '1;36',
        self::RED          => '0;31',
        self::LIGHT_RED    => '1;31',
        self::PURPLE       => '0;35',
        self::LIGHT_PURPLE => '1;35',
        self::BROWN        => '0;33',
        self::YELLOW       => '1;33',
        self::LIGHT_GRAY   => '0;37',
        self::WHITE        => '1;37',
        self::NORMAL       => '0;39',
    ];

    /**
     * Returns specific symbol for output modification in console
     *
     * @param string $color
     *
     * @return string
     */
    public static function getSymbol(string $color): ?string
    {
        if (self::isValid($color)) {
            return self::$modifier_symbol[$color];
        }

        return null;
    }

    /**
     * Method validates whether ot not color is valid
     *
     * @param string $color
     *
     * @return bool
     */
    public static function isValid(string $color): bool
    {
        try {
            $constants = self::getAll(__CLASS__);

            return \in_array($color, $constants, true);
        } catch (\ReflectionException $e) {
            return false;
        }

    }
}