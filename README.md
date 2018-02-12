# PHP console print 
[![Build Status](https://travis-ci.org/rolandsusans/php-console-print-lib.svg?branch=master)](https://travis-ci.org/rolandsusans/php-console-print-lib)
[![Coverage Status](https://coveralls.io/repos/github/rolandsusans/php-console-print-lib/badge.svg?branch=master)](https://coveralls.io/github/rolandsusans/php-console-print-lib?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/rolandsusans/php-console-print-lib/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/rolandsusans/php-console-print-lib/?branch=master)    
## This lib is dedicated for printing colorful stuff to console. 
![](/example/output.png)
# Installation
```bash
composer require rolandsusans/console-print
```
# Usage
```php
use Console\Console;
use Console\Modifier\Background;
use Console\Modifier\Option;
use Console\Modifier\Text;

Console::log('myMessage',Text::GREEN, Background::RED, Options::UNDERLINE);
```
# Road Map

- [ ] Dependency injection 
- [ ] Refactor namespace to `\RolandsUsans\...`
- [ ] [Progress Bar](https://symfony.com/doc/current/components/console/helpers/progressbar.html)
- [ ] Ability to specify output stream, `STDOUT`, `STERR`, file or function
- [ ] Ability to use it like I would `printf`
- [ ] Singleton design pattern
