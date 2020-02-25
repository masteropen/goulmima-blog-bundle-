<?php

/*
 * This file is part of the GoulmimaBlogBundle package.
 *
 * (c) Majid Noureddine <noureddine.digitalworks@gmail.com>
 *
 */

namespace Goulmima\BlogBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class HandleAssetsExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('charts_scripts', [$this, 'chartsScripts']),
        ];
    }
    
    public function chartsScripts()
    {
        echo "<script src=\"https://www.amcharts.com/lib/4/core.js\"></script>".PHP_EOL."
            <script src=\"https://www.amcharts.com/lib/4/charts.js\"></script>".PHP_EOL."
            <script src=\"https://www.amcharts.com/lib/4/themes/material.js\"></script>".PHP_EOL."
            <script src=\"https://www.amcharts.com/lib/4/lang/de_DE.js\"></script>".PHP_EOL."
            <script src=\"https://www.amcharts.com/lib/4/geodata/germanyLow.js\"></script>";
    }
}
