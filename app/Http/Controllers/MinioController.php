<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MinioController extends Controller
{
    public function get(){
        $data = Storage::disk('minio')->get('hello.json');
        return response()->json($data);
    }

    public function set(){
        $data = Storage::disk('minio')->put('hello.json', '{"hello": "world"}');
        return response()->json($data);
    }
}
