<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

use App\Models\WorkOrder;
use Storage;

class Helper
{
    public static function fileUrl($file){
        return $file;
        // return Storage::cloud()->url($file ?? '-');x
    }

}
