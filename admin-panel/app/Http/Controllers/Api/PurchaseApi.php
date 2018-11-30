<?php
namespace App\Http\Controllers\Api;

use App\Appuser;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Request\PurchaseRequest;
use App\Http\Resources\Purchase as PurchaseResourceCollection;
use Symfony\Component\HttpFoundation\JsonResponse;

class PurchaseApi extends Controller
{
    public function updateApp(PurchaseRequest $request)
    {
        
        $days = Carbon::now()->addDay($request->get('daysToAdd'));

        $users = [
            "isPurchaseAds"          => "purchase_ads",
            "isPurchaseWatermark"    => "is_purchase_watermark",
            "isPurchaseUnlimited"    => "is_purchase_unlimited",
            "isPurchaseSubscription" => "is_purchase_subscription",
        ];

        if (array_key_exists($request->get('nameOfFlag'), $users))
         {
            $users = Appuser::where('device_id', $request->get('device_id'))->update(

                [

                    $users[$request->get('nameOfFlag')] => 1,
                    'last_date_of_subscription'         => ($request->get('daysToAdd')) ? $days : '',
                ]

            );

            return new JsonResponse([
                'success' => true,
                'Users'   => new PurchaseResourceCollection( Appuser::where('device_id', $request->get('device_id'))->first()),
            ]);

        }

       

    }
}
