<?php

namespace App\Http\Controllers\Api;
use App\Application;
use App\Http\Controllers\Controller;
use App\Http\Resources\Application as ApplicationResourceCollection;
use App\Http\Requests\Admin\Request\ApplicationCreateRequest;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApplicationCreateController extends Controller
{
    public function getApp(ApplicationCreateRequest $request)
    {
        $apps = Application::where('app_platform_id', $request->get('app_platform_id'))->get();
       
        if (!$apps->isEmpty()) {
            return new JsonResponse([
                'success' => true,
                'apps'   =>ApplicationResourceCollection::collection($apps),
            ]);
        }

        return response()->json([
            'success' => false,
            'Message' => 'OOps No Data found',
        ]);
    }
}