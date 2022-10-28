<?php

namespace NCentral_GLPI\inc\Modelo;

class PrintValue{    
    public function printV($text, $style = '', $newLine = true): void{
        if($GLOBALS['debug']){
            $styles = array(
                'success' => "\033[0;32m%s\033[0m",
                'error'   => "\033[31;31m%s\033[0m",
                'info'    => "\033[33;33m%s\033[0m",

                'Black'    => "\033[0;30m%s\033[0m",
                'Red'      => "\033[0;31m%s\033[0m",
                'Green'    => "\033[0;32m%s\033[0m",
                'Yellow'   => "\033[0;33m%s\033[0m",
                'Blue'     => "\033[0;34m%s\033[0m",
                'Purple'   => "\033[0;35m%s\033[0m",
                'Cyan'     => "\033[0;36m%s\033[0m",
                'Gray'     => "\033[0;37m%s\033[0m",
                'Graphite' => "\033[1;30m%s\033[0m",

                'Bold Red'    => "\033[1;31m%s\033[0m",
                'Bold Green'  => "\033[1;32m%s\033[0m",
                'Bold Yellow' => "\033[1;33m%s\033[0m",
                'Bold Blue'   => "\033[1;34m%s\033[0m",
                'Bold Purple' => "\033[1;35m%s\033[0m",
                'Bold Cyan'   => "\033[1;36m%s\033[0m",
                'Bold White'  => "\033[1;37m%s\033[0m",

                'Bg Black'  => "\033[40;1;37m%s\033[0m",
                'Bg Red'    => "\033[41;1;37m%s\033[0m",
                'Bg Green'  => "\033[42;1;37m%s\033[0m",
                'Bg Yellow' => "\033[43;1;37m%s\033[0m",
                'Bg Blue'   => "\033[44;1;37m%s\033[0m",
                'Bg Purple' => "\033[45;1;37m%s\033[0m",
                'Bg Cyan'   => "\033[46;1;37m%s\033[0m",
                'Bg Gray'   => "\033[47;1;37m%s\033[0m",

                'Underscore' => "\033[4;37m%s\033[0m",
                'Inverted'   => "\033[7;37m%s\033[0m",
                'Blink'      => "\033[5;37m%s\033[0m",
            );

            $format = '%s';

            if (isset($styles[$style])) {
                $format = $styles[$style];
            }

            if ($newLine) {
                $format .= PHP_EOL;
            }

            printf($format, $text);
            return;
        }
        
    }
}