<?php declare(strict_types = 1);


namespace Console\Modifier;


interface ModifierInterface
{
    /**
     * Method return all defined colors
     *
     * @param string $class
     *
     * @return array
     */
    public static function getAll(string $class = __CLASS__): array;

    /**
     * Method validates whether ot not color is valid
     *
     * @param string $color
     *
     * @return bool
     */
    public static function isValid(string $color): bool;

    /**
     * Returns specific symbol for output modification in console
     *
     * @param string $color
     *
     * @return string|null
     */
    public static function getSymbol(string $color): ?string;
}