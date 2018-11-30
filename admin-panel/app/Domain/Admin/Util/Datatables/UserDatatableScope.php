<?php

namespace App\Domain\Admin\Datatables;

use App\Appuser;
use App\Domain\Util\Datatables\UserBaseDatatableScope;

class UserDatatableScope extends UserBaseDatatableScope
{
    
    public function __construct()
    {
        $this->setHtml([

            [
                'data'  => 'application.name',
                'name'  => 'application.name',
                'title' => 'Application',

            ],

            [
                'data'  => 'device_id',
                'name'  => 'device_id',
                'title' => 'Device',

            ],
            [
                'data'  => 'country',
                'name'  => 'country',
                'title' => 'Country',

            ],
            [
                'data'  => 'device_type',
                'name'  => 'device_type',
                'title' => 'Model',

            ],
            [
                'data'  => 'os_version',
                'name'  => 'os_version',
                'title' => 'OS',

            ],
            [
                'data'       => 'is_full_access',
                'name'       => 'is_full_access',
                'title'      => 'Full Access',
                'searchable' => false,
                'orderable'  => false,
            ],
            [
                'data'       => 'purchase_ads',
                'name'       => 'purchase_ads',
                'title'      => 'Purchase Adds',
                'searchable' => false,
                'orderable'  => false,
            ],
            [
                'data'       => 'is_purchase_watermark',
                'name'       => 'is_purchase_watermark',
                'title'      => 'Purchase Watemark',
                'searchable' => false,
                'orderable'  => false,
            ],
            [
                'data'       => 'is_purchase_unlimited',
                'name'       => 'is_purchase_unlimited',
                'title'      => 'Purchase Unlimited',
                'searchable' => false,
                'orderable'  => false,
            ],
            [
                'data'       => 'is_purchase_subscription',
                'name'       => 'is_purchase_subscription',
                'title'      => 'Subscribe',
                'searchable' => false,
                'orderable'  => false,
            ],

            [
                'data'  => 'last_date_of_subscription',
                'name'  => 'last_date_of_subscription',
                'title' => 'Last Date Subscription',

            ],

        ]);
    }

    
    public function query()
    {

        if (request()->get('app_id')) {
            $query = Appuser::select('appusers.*')->with(['application', 'application.plateforms'])->where('app_id', request()->get('app_id'));
        } else {
            $query = Appuser::select('appusers.*')->with(['application', 'application.plateforms']);
        }

        return datatables()->eloquent($query)->addColumn('actions', function ($model) {
            return view('Users.dtcontrols')
                ->with('id', $model->getKey())
                ->with('deleteUrl', route('users.destroy', $model->getKey()))
                ->with('editUrl', route('users.edit', $model->getKey()))
                ->render();
        })
            ->editColumn('is_full_access', function ($model) {
                return $model->is_full_access ? 'YES' : 'NO';
            })
            ->editColumn('purchase_ads', function ($model) {
                return $model->purchase_ads ? 'YES' : 'NO';
            })
            ->editColumn('is_purchase_watermark', function ($model) {
                return $model->is_purchase_watermark ? 'YES' : 'NO';
            })
            ->editColumn('is_purchase_unlimited', function ($model) {
                return $model->is_purchase_unlimited ? 'YES' : 'NO';
            })
            ->editColumn('is_purchase_subscription', function ($model) {
                return $model->is_purchase_subscription ? 'YES' : 'NO';
            })
            ->editColumn('last_date_of_subscription', function ($model) {
                return $model->is_purchase_subscription ? $model->last_date_of_subscription : '-';
            })

            ->rawColumns(['actions'])

            ->make(true);
    }
}
