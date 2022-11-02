--TEST--
Nested generic arrays are handled appropriately
--EXTENSIONS--
tokenizer
--FILE--
<?php

$tokens = token_get_all('<?php function foo(array<int, array<string>> $arr): void {}');

var_dump($tokens[13] === '>');
var_dump($tokens[14] === '>');
?>
--EXPECT--
bool(true)
bool(true)
