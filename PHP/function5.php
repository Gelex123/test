<?php
if (function_exists('some_func')) {
    some_func(21);
} else {
    echo 'No such function';
}
function some_func ($a)
{
    echo 'Hello';
}

