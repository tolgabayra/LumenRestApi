<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsersController extends Controller{

    public function createUser(Request $request)
    : JsonResponse {

        $author = Users::create($request->all());

        return response()->json($author, Response::HTTP_CREATED);
    }

    public function getAllUser()
    : JsonResponse{
        return response()->json(Users::all());
    }   
}