<?php

if (!function_exists('active_class')) {
    function active_class($paths, $activeClass = 'active')
    {
        foreach ($paths as $path) {
            if (request()->is($path)) {
                return $activeClass;
            }
        }
        return '';
    }
}

if (!function_exists('is_active_route')) {
    function is_active_route($paths)
    {
        foreach ($paths as $path) {
            if (request()->is($path)) {
                return true;
            }
        }
        return false;
    }
}

if (!function_exists('show_class')) {
    function show_class($paths, $showClass = 'show')
    {
        foreach ($paths as $path) {
            if (request()->is($path)) {
                return $showClass;
            }
        }
        return '';
    }
}
