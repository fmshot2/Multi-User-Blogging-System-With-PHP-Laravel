<?php

namespace App\Lib;


trait Helper
{
    public function slugify($string)
    {
        return str_replace(array(" ", '_', '-', ',','#', '$', '&', '@', '*', '^', '"', "'"), '-', $string);
    }
}