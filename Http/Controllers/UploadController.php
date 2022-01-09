<?php
namespace Plugins\PluginMarket\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Plugins\PluginMarket\Http\Requests\UploadImageRequest;

class UploadController extends Controller
{
    /**
     * @param  UploadImageRequest  $request
     * @return JsonResponse
     */
    public function image(UploadImageRequest $request):JsonResponse
    {
       $path = Storage::put('image', $request->file('file'));
       return Response::json(['url' => Storage::url($path)]);
    }
}