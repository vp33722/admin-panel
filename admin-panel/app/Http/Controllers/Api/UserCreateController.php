<?php
namespace App\Http\Controllers\Api;

use App\Appuser;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Request\UserRequest;
use App\Http\Resources\User as UserResource;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserCreateController extends Controller
{
    public function store(UserRequest $request)
    {
        $user = Appuser::where('device_id', $request->get('device_id'))->first();

        if ($user) {
            $user->update($request->except('device_id'));

        } else {
            $user = Appuser::create($request->all());
        }

        return new JsonResponse([
            'success' => true,
            'Users'   => new UserResource($user),
        ]);

    }
}
