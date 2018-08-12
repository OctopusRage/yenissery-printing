<?php
/**
 * Created by PhpStorm.
 * User: adhin
 * Date: 8/12/18
 * Time: 7:36 PM
 */

namespace App\Utils;


use Illuminate\Http\UploadedFile;

class Helper
{
    public static function upload(UploadedFile $file) {
        $fileName = str_random('10').".". $file->getClientOriginalExtension();
        $file->storePubliclyAs('public/images',$fileName);
        return $fileName;
    }


}