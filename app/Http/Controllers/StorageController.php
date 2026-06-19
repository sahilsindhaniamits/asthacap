<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StorageController extends Controller
{
    public function uploadImage(Request $request, $type)
    {
        $files = $request->file('file');
        if (empty($type)) return;
        // foreach ($files as $file) {
        //     $fileName = Storage::disk('s3')->put($type, $file);
        //     break;
        // }
        $fileName = '';
        foreach ($files as $file) {
            $name = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path("/$type/");
            $file->move($destinationPath, $name);
            $fileName = "/$type/$name";
            break;
        }

        return response()->json(
            [
                'status' => true,
                'url'    => $fileName
            ]
        );
    }
}
