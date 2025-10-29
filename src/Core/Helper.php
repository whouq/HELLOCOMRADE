<?php

namespace App\Core;

class Helper
{

    private $name;
    public function dd($something)
    {
        echo '<pre>';
        print_r($something);
        echo '</pre>';
        exec();
     }

}