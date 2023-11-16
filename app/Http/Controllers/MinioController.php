<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MinioController extends Controller
{
    public function get(){
        $data = Storage::disk('minio')->publicUrl('3.jpg');
        // $data = Storage::disk('minio')->temporaryUrl('17625506_d5db_qz19_201126-ai (14).png', \Carbon\Carbon::now()->addMinutes(1));
        return response()->json($data);
    }

    public function set(Request $request){
        $data = Storage::disk('minio')->write($request->file('file')->getClientOriginalName(), file_get_contents($request->file('file')));
        // $data = Storage::disk('minio')->writeStream($request->file('file')->getClientOriginalName(), $request->file('file'));
        return response()->json($data);
    }
}
