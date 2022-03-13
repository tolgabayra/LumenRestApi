<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostsController extends Controller{

    public function createPost(Request $request)
    : JsonResponse {

        $post = Posts::create($request->all());

        return response()->json($post, Response::HTTP_CREATED);
    }

    public function getAllPost()
    : JsonResponse{
        return response()->json(Posts::all());
    }   

    public function getPost($id)
    : JsonResponse{
        return response()->json(Posts::find($id));
    }
    
    public function deletePost($id){
        Posts::findOrFail($id)->delete();
        return response("Deleted Succesfully", Response::HTTP_OK);
    }

    public function updatePost($id, Request $request)
    : JsonResponse {

        $post = Posts::findOrFail($id);
        $post->update($request->all());

        return response()->json($post, Response::HTTP_OK);
    }

}