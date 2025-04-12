<?php

namespace App\Http\Controllers;

use App\Services\User2Service;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use Laravel\Lumen\Routing\Controller as BaseController;

class UserController extends BaseController
{
    use ApiResponser;

    /**
     * The service to consume the User2 Microservice
     * @var User2Service
     */
    public $user2Service;

    /**
     * Create a new controller instance
     * @return void
     */
    public function __construct(User2Service $user2Service){
        $this->user2Service = $user2Service;
    }

    public function index()
    {
        // Logic will be added to call Site2 microservice
    }

    public function getUsers()
    {
        // Logic will be added to call Site2 microservice
    }

    public function add(Request $request)
    {
        // Logic will be added to call Site2 microservice
    }

    public function show($id)
    {
        // Logic will be added to call Site2 microservice
    }

    public function update(Request $request, $id)
    {
        // Logic will be added to call Site2 microservice
    }

    public function delete($id)
    {
        // Logic will be added to call Site2 microservice
    }

    public function getUser()
    {
        // Logic will be added to call Site2 microservice
    }

    public function getError()
    {
        // Logic will be added to call Site2 microservice
    }

    public function goToDashboard()
    {
        // Logic will be added to call Site2 microservice
    }
}
