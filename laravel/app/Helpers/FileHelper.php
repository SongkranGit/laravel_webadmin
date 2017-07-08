<?php


use Illuminate\Support\Facades\File;

if (!function_exists('delete_file')) {
    function delete_file($path_file)
    {
        if ($path_file != null && $path_file != '') {
            if(File::exists($path_file)){
                File::delete($path_file);
            }
        }
    }
}
