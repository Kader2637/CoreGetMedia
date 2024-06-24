<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\FollowerInterface;
use App\Models\Follower;
use App\Http\Requests\StoreFollowerRequest;
use App\Http\Requests\UpdateFollowerRequest;
use App\Models\Author;

class FollowerController extends Controller
{
    private FollowerInterface $follower;

    public function __construct(FollowerInterface $follower)
    {
        $this->follower = $follower;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreFollowerRequest $request, Author $author)
    {
        $this->follower->store([
            'user_id' => auth()->user()->id,
            'author_id' => $author->id
        ]);
        return back()->with('success', 'Berhasil Mengfollow Penulis');
    }

    /**
     * Display the specified resource.
     */
    public function show(Follower $follower)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Follower $follower)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFollowerRequest $request, Follower $follower)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Follower $follower, Author $author)
    {
        $this->follower->delete(auth()->user()->id, $author->id);
        return back()->with('success', 'Berhasil mengunfollow penulis');
    }
}
