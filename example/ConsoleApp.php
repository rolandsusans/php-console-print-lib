<?php declare(strict_types = 1);

use Console\Output\Console;
use Console\Output\Modifier\Background;
use Console\Output\Modifier\Option;
use Console\Output\Modifier\Text;

require __DIR__ . '/../vendor/autoload.php';

class ConsoleApp
{
    public function demonstrate(): void
    {
        $text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $textColors = (new ReflectionClass(Text::class))->getConstants();
        $backgroundColors = (new ReflectionClass(Background::class))->getConstants();
        $options = (new ReflectionClass(Option::class))->getConstants();

        foreach ($textColors as $color){
            Console::log($text."\n",$color);
        }

        foreach ($backgroundColors as $color){
            Console::log($text."\n",null,$color);
        }

        foreach ($options as $option){
            Console::log($text."\n",null,null,$option);
        }
    }
}

$console = (new ConsoleApp())->demonstrate();