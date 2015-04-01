<?php
function load_lib($class) {
    include 'library/'.$class . '.php';
};
spl_autoload_register('load_lib');