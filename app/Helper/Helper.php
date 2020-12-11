<?php
namespace app\Helper;
use File;
use Image;

class Helper {
    public static function uploadImage($image, $path) {
        $extension = $image->getClientOriginalExtension();
        if(is_dir($path) == false) {
            \File::makeDirectory($path, $mode = 0755, true);
        }
        $filename = uniqid() . '.' . $extension;
        $img = \Image::make($image->getRealPath());
        $img->save($path . '/' . $filename);
        return $filename;
    }
}