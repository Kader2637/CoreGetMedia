<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\PackageInteface;
use App\Models\cr;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    private PackageInteface $packages;

    public function __construct(PackageInteface $packages)
    {
        $this->packages = $packages;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = $this->packages->get();
        return view('pages.user.subscribe.index', compact('packages'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
