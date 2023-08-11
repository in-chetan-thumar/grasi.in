<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Dealer;
use App\Models\Dealers;
use Illuminate\Http\Request;


class locatetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $llumarDealerData = Dealer::all();
        $state=Dealer::select('state', 'city')->groupBy('state') ->pluck('state','city');
        $city=Dealer::select('city')->groupBy('city')->pluck('city');
        // dd($state,$city);
        return view('frontend.locate',['llumarDealerState' => $state, 'llumarDealercity' => $city]);
    }
    
     
    public function getCities(Request $request)
    {
    $state = $request->input('state');

    $cities = Dealer::where('state', $state)
        ->pluck('city')
        ->toArray();

    // return response()->json(['cities' => $cities]);
}
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // app/Http/Controllers/LocationController.php


public function getData(Request $request)
{
    $state = $request->input('state');
    $city = $request->input('city');

    // Retrieve data from your table based on state and city
    $data = Dealer::where('state_column', $state)
                      ->where('city_column', $city)
                      ->get();

    // Generate HTML to display the data
    $html = '<ul>';
    foreach ($data as $item) {
        $html .= "<li>{$item->field1} - {$item->field2}</li>";
    }
    $html .= '</ul>';

    return $html;
}

}

