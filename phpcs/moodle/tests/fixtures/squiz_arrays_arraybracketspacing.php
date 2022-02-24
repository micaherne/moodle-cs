<?php
defined('MOODLE_INTERNAL') || die(); // Make this always the 1st line in all CS fixtures.
$arr['ok']          = $value;
$arr ['wrong']      = $value;
$arr[ 'wrong' ]     = $value;

$array = [ 'foo' => 'bar', 'bar' => 'foo', ];

$array = [
    'foo' => 'bar',
    'bar' => 'foo',
];

if ($arr[($index + 1)] === true) {
    ok();
}
if ($array  [ ($index + 1) ] === true) {
    wrong();
}

$a[$a, $b] = $c;
$a[ $a, $b ] = $c;

echo foo()['ok'];
echo foo()[ 'wrong' ];

echo $this->arr['ok'];
echo $this->arr[ 'wrong' ];

echo [ 1, 2, 3 ]['ok'];
echo [ 1, 2, 3 ][ 'wrong' ];

echo 'PHP'['ok'];
echo 'PHP'[ 'wrong' ];

$arr = [];
$arr = [ ];
