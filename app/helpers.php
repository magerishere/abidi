<?php

if(!function_exists('str_merge')) {
    function str_merge(array $strings): string
    {
       return implode(' ' , $strings);
    }
}
