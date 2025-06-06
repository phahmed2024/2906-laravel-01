<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostStatusResource;
use App\Models\PostStatus;
use App\Http\Requests\StorePostStatusRequest;
use App\Http\Requests\UpdatePostStatusRequest;

class PostStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post_statuses = PostStatus::all(["id", "type"]);

        $Ready_post_statuses = PostStatusResource::collection($post_statuses);
        
        return $Ready_post_statuses;
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
    public function store(StorePostStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PostStatus $postStatus)
    {
        return $postStatus;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostStatus $postStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostStatusRequest $request, PostStatus $postStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostStatus $postStatus)
    {
        //
    }
}
