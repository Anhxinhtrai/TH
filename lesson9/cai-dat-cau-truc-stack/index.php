<?php
include "Stack.php";

    $stack = new Stack;

    $stack->push(1);
    $stack->push(2);
    $stack->push(3);
    $stack->push(3);

    var_dump( $stack->stack);