<?php
require("vendor/autoload.php");
require_once("src/StringUtils.php");

use Webmozart\Assert\Assert;

Assert::Eq(StringUtils\capitalize('hello'), 'Hello');

Assert::Eq(StringUtils\capitalize(''), '');

echo 'Все тесты пройдены!';