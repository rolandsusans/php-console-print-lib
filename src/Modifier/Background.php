<?php declare(strict_types = 1);


namespace Console\Output\Modifier;


use ReflectionClass;

class Background extends Modifier
{
    public const BLACK      = 'black';
    public const RED        = 'red';
    public const GREEN      = 'green';
    public const YELLOW     = 'yellow';
    public const BLUE       = 'blue';
    public const MAGENTA    = 'magenta';
    public const CYAN       = 'cyan';
    public const LIGHT_GRAY = 'light_gray';

    public static $background_colors = [
        self::BLACK      => '40',
        self::RED        => '41',
        self::GREEN      => '42',
        self::YELLOW     => '43',
        self::BLUE       => '44',
        self::MAGENTA    => '45',
        self::CYAN       => '46',
        self::LIGHT_GRAY => '47',
    ];


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

    /**
     * Returns specific symbol for output modification in console
     *
     * @param string $color
     *
     * @return string|null
     */
    public static function getSymbol(string $color): ?string
    {
        if (self::isValid($color)) {
            return self::$background_colors[$color];
        }

        return null;
    }
}