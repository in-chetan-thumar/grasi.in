<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\GraphicContactRequest;
use App\Mail\GraphicMailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GraphicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.graphic');
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
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GraphicContactRequest $request)
    {
       
        $params = [];
        $params['first_name'] = $request->first_name;
        $params['last_name'] = $request->last_name;
        $params['subject'] = $request->subject;
        $params['number'] = $request->number;
        $params['email'] = $request->email;
        // dd($params);
        Mail::send(new GraphicMailNotification($params));
        toastr()->success('Your enquire has been submitted successfully!');
        return redirect()->back();
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
}
