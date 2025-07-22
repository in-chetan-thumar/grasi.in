<?php

namespace App\Http\Controllers\llumar;

use App\Http\Requests\LocateContactRequest;
use App\Mail\LocateMailNotification;
use App\Repositories\DealerRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class LocateDealerControler
{  
    protected $repository;

    public function __construct(DealerRepository $repository)
    {
        $this->repository = $repository;
    }


    public function index(Request $request)
    { 
       
        $llumarDealers = resolve('dealer-repo')->renderHtmlDealers($this->getParamsForFilter($request));    
        $states = $this->repository->getAllData('state');
        $cities = $this->repository->getAllData('city', $request->state_id);
       
        return view('llumar.locate_dealers.list', compact('states', 'llumarDealers', 'cities'));
    }

    public function getParamsForFilter(Request $request)
    {
         $previousUrl = parse_url(url()->previous());
        $params = [];
        if (request()->routeIs('llumar.locate.llumar.dealer')) {
            $params['path'] = \Illuminate\Support\Facades\Request::fullUrl();
            $params['city'] = $request->city_id ?? null;
            $params['state'] = $request->state_id ?? null;


        } else {
            parse_str($previousUrl['query'], $params);
            $params['path'] = url()->previous();
        }
        return $params;
        
    }
    public function getCities($state)
    {
        
        try {

            $options = '<option selected="selected" value="">Select City</option>';
            $cities = resolve('dealer-repo')->getAllData('city', $state);    
          
            foreach ($cities as $city) {

                $options .= '<option  value="' . $city . '" >' . $city . '</option>';
            }

            $data['error'] = false;
            $data['view'] = $options;
            return response()->json($data);
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = resolve('common-helper')->generateErrorMessage($e);
            return response()->json($data);
        }
    }
    public function sendEmail(LocateContactRequest $request)
    {
        $params = [];
        $params['first_name'] = $request->first_name;
        $params['last_name'] = $request->last_name;
        $params['city'] = $request->city;
        $params['state'] = $request->state;
        $params['email'] = $request->email;
        $params['number'] = $request->number;
        // dd($params);
        Mail::send(new LocateMailNotification($params));
        toastr()->success('Your enquire has been submitted successfully!');
        return redirect()->back();
    }

}
