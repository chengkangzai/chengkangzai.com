<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Storage;

class ImageController extends Controller
{
    public const PUBLIC_PATH = 'chengkangzai.com/images/';

    public function store(Request $request): JsonResponse
    {
        $fileName = $request->file('upload')->getClientOriginalName();

        $s = Storage::disk('s3')->put(self::PUBLIC_PATH . $fileName, $request->file('upload'), 'public');
        $url = Storage::disk('s3')->url($s);

        return response()->json(['url' => $url]);
    }
}
