<?php
//$variable = 3.14;
// $variable = 3;
// $variable = 'one';
 //$variable = true;
 //$variable = null;
 $variable = [1,2];

// Инструкция switch:

switch ($variable) {
    case is_bool($variable):
        echo "Тип переменной - 'bool'";
        break;
    case is_float($variable):
        echo "Тип переменной - 'float'";
        break;
    case is_int($variable):
        echo "Тип переменной - 'int'";
        break;
    case is_string($variable):
        echo "Тип переменной - 'string'";
        break;
    case is_null($variable):
        echo "Тип переменной - 'null'";
        break;
    case is_array($variable):
        echo "Тип переменной - 'array'";
        break;
    default:
        echo "Тип переменной не определен";
}
echo '<br>';
// if-else:

if (is_bool($variable)) {
    echo "Тип переменной - 'bool'";
} elseif (is_float($variable)) {
    echo "Тип переменной - 'float'";
} elseif (is_int($variable)) {
    echo "Тип переменной - 'int'";
} elseif (is_string($variable)) {
    echo "Тип переменной - 'string'";
} elseif (is_null($variable)) {
    echo "Тип переменной - 'null'";
} elseif (is_array($variable)) {
    echo "Тип переменной - 'array'";
} else {
    echo "Тип переменной не определен";
}