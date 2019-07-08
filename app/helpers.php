<?php

use Symfony\Component\VarDumper\VarDumper;

if (!function_exists('dd')) {
    /**
     * Dump the passed variables and end the script.
     *
     * @param mixed $vars
     * @return void
     */
    function dd(...$vars)
    {
        foreach ($vars as $v) {
            VarDumper::dump($v);
        }

        die(1);
    }
}