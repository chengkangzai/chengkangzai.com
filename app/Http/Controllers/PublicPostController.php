<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Response;

class PublicPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return Response
     */
    public function show(Post $post)
    {
        echo $post;
    }

}
