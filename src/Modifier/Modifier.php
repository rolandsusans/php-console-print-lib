<?php declare(strict_types = 1);


namespace Console\Modifier;


use ReflectionClass;

abstract class Modifier implements ModifierInterface
{
    /**
     * @param string $class
     *
     * @return array
     */
    public static function getAll(string $class = __CLASS__): array
    {
        try {
            $class = new ReflectionClass($class);

            return $class->getConstants();
        } catch (\ReflectionException $e) {
            return [];
        }

    }
}