<?php

namespace Modules\Administrators\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Modules\Administrators\Entities\Administrators;
use Modules\Administrators\Http\Requests\Panel\AdministratorCreateRequest;
use Modules\Administrators\Http\Requests\Panel\ChangeAdminPasswordRequest;
use Modules\Administrators\Http\Requests\Panel\UpdateAdminStatusRequest;
use Modules\Administrators\Repositories\Contracts\AdministratorContract;
use Modules\Administrators\Traits\DeleteAdministratorTrait;
use Modules\Administrators\Transformers\Panel\AdministratorResource;
use Modules\Core\Services\ResponseHelper;
use Config;

class AdministratorsController extends Controller
{
    use DeleteAdministratorTrait;

    private $adminRepository;
    private $response;

    /**
     * AdministratorsController constructor.
     * @param $adminRepository
     */
    public function __construct(AdministratorContract $adminRepository)
    {
        Config::set('jwt.user', Administrators::class);
        Config::set('auth.providers', ['users' => [
            'driver'    =>  'eloquent',
            'model' =>  Administrators::class,
        ]]);
        $this->adminRepository = $adminRepository;
        $this->response = new ResponseHelper();
    }

    public function index()
    {
        $admins = $this->adminRepository->all();
        return $this->response->successWithData(AdministratorResource::collection($admins));
    }

    public function changePassword(ChangeAdminPasswordRequest $request)
    {
        $this->adminRepository->updateItem($request->adminCode, [
            'password'    =>  bcrypt($request->newPassword)
        ]);
        return $this->response->success();

    }

    public function changeAdminStatus(UpdateAdminStatusRequest $request)
    {
        $this->adminRepository->updateItem($request->adminCode, [
            'status'    =>  $request->adminStatus
        ]);
        return $this->response->success();

    }

    public function store(AdministratorCreateRequest $request)
    {
        $admin = $this->adminRepository->createItem([
            'name'  =>  $request->adminName,
            'email'  =>  $request->adminEmail,
            'password'  =>  bcrypt($request->adminPassword),
            'status'  =>  $request->adminStatus,
            'csrf_token'  =>  Str::random(32),
        ]);
        return $this->response->successWithData(new AdministratorResource($admin));
    }

    public function me()
    {
        return $this->response->successWithData(auth()->user());
    }

    public function logout()
    {
        auth()->logout();

        return $this->response->successWithData('successfully logged out!');
    }

    public function destroy($id)
    {
        $this->deleteAdministrator($id);

        return $this->response->success();
    }




}
