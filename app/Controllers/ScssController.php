<?php

namespace App\Controllers;

use App\Services\ScssCompiler;

class ScssController
{
    public static function compile()
    {
        $compiler = new ScssCompiler();
        $scss = __DIR__ . '/../../resources/scss/styles.scss';
        $css = __DIR__ . '/../../public/styles.css';

        $compiler->compile($scss, $css);
    }
}