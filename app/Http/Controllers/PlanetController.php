<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use App\Services\test\NasaApiService;
use Illuminate\Http\Request;


class PlanetController extends Controller
{
    protected $nasaApiService;

    public function __construct(NasaApiService $nasaApiService)
    {
        $this->nasaApiService = $nasaApiService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marsPhoto = $this->nasaApiService->getCuriosityMarsPhoto();
        return view('test.index', compact('marsPhoto'));
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
    public function show(Planet $planet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Planet $planet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Planet $planet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Planet $planet)
    {
        //
    }
}
