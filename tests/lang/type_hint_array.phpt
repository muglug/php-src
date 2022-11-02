--TEST--
Support array typehint
--FILE--
<?php
function foo(
    array<int, array<string>> $arr
): void {
    // do nothing
}
?>
--EXPECT--
