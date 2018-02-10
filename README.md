# PHP console print 
[![Build Status](https://travis-ci.org/rolandsusans/php-console-print-lib.svg?branch=master)](https://travis-ci.org/rolandsusans/php-console-print-lib)

This lib is dedicated for printing colorful stuff to console. 
![](/example/output.png)
# Installation
```bash
    composer requrire rolandsusans/console-print
```
# Usage
```php
use Console\Console;
use Console\Modifier\Background;
use Console\Modifier\Option;
use Console\Modifier\Text;

Console::log('myMessage',Text::GREEN, Background::RED, Options::UNDERLINE);
```