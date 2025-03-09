<?php
    function dd($value)
    {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
    }
    
    function IsURL($url)
    {
        return $_SERVER['REQUEST_URI'] === $url;
    }

   