<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\LlumarWindowFilm;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class LlumarWindowFilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('landing_page.llumar_window_films');
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
        $this->validate($request, [
            'g-recaptcha-response' => [
                'required',
                function (string $attribute, mixed $value, Closure $fail) {
                    $g_response = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
                        'secret' => env('NOCAPTCHA_SECRET_V3'),
                        'response' => $value,
                        'remoteip' => \request()->ip(),
                    ]);
                    if (!$g_response->json('success')) {
                        $fail("The {$attribute} is invalid.");
                    }
                },
            ],
        ]);
        $params = [];
        $params['first_name'] = $request->first_name;
        $params['last_name'] = $request->last_name;
        $params['project_type'] = $request->project_type;
        $params['type_of_film'] = $request->type_of_film;
        $params['company_name'] = $request->company_name;
        $params['mobile'] = $request->mobile;
        $params['whatsapp_number'] = $request->whatsapp_number;
        $params['state'] = $request->state;
        $params['email'] = $request->email;
        $enquiry = LlumarWindowFilm::create($params);

        if ($enquiry) {
            // Mail::send(new EnquiryMailNotification($params));
            app('common-helper')->CreateLead($request);
            toastr()->success('Your enquire has been submitted successfully!');
            // return redirect()->route('enquiry.thank.you');
            return redirect()->back();
        }
        toastr()->success('Your enquire not submitted successfully!');
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
