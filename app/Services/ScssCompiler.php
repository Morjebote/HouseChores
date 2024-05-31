<?php

namespace App\Services;

use ScssPhp\ScssPhp\Compiler;

class ScssCompiler
{
    protected Compiler $compiler;

    public function __construct()
    {
        $this->compiler = new Compiler();
    }

    public function compile($scss, $css) {
        $scssContent = file_get_contents($scss);
        $cssContent = $this->compiler->compileString($scssContent)->getCss();
        file_put_contents($css, $cssContent);
    }
}