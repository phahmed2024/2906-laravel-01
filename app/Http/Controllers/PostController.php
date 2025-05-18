<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //    $posts=Post::all(["id","title","body"]);

        $posts = Post::with(['post_status', 'user', 'comments','reactions'])->get();

        $ready_posts=PostResource::collection($posts);

        return $ready_posts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // $result = Post::join('post_statuses', 'post_statuses.id', '=', 'posts.post_status_id')
        //     ->join('users', 'users.id', '=', 'posts.user_id')
        //     ->select(['posts.id AS post_id', 'title AS Post Title', 'body', 'type', 'name', 'post_statuses.id AS post_status_id'])
        //     ->where('posts.id', $post->id)
        //     ->orderBy('posts.id')
        //     ->get();
        // return $result;
        // return $post->load(['post_status', 'user', 'comments', 'reactions']);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
