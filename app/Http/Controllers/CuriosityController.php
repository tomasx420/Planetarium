<?php

namespace App\Http\Controllers;

use App\Models\Curiosity;
use App\Services\NasaApiService;
use Illuminate\Http\Request;

class CuriosityController extends Controller
{

    protected $nasaApiService;

    public function __construct(NasaApiService $nasaApiService)
    {
        $this->nasaApiService = $nasaApiService;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
        public function index()
        {
            $curiosityApiData = $this->nasaApiService->getCuriosityMarsPhoto();

            $panoramicPhoto = $curiosityApiData['latest_photos'][0]['img_src'];
            $photoDate = $curiosityApiData['latest_photos'][0]['earth_date'];
            return view('curiosity.index', compact('panoramicPhoto', 'photoDate'));
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
    public function show(Curiosity $curiosity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curiosity $curiosity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Curiosity $curiosity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curiosity $curiosity)
    {
        //
    }
}
