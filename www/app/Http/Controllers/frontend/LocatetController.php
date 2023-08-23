<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LocateContactRequest;
use App\Mail\LocateMailNotification;
use App\Repositories\DealerRepository;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class LocatetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */

     protected $repository;

    public function __construct(DealerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request)
    {


        $llumarDealers= resolve('dealer-repo')->renderHtmlDealers($this->getParamsForFilter($request));
        //$llumarDealerData = $this->repository->getAllData('all','1');

        $states = $this->repository->getAllData('state');
        $city = $this->repository->getAllData('city');

        return view('frontend.locate',compact('states','llumarDealers'));
    }


    public function getCities($state)
    {
        try {

            $options = '<option selected="selected" value="">Select City</option>';
            $cities=$this->repository->getAllData('city',$state);

            foreach ($cities as  $city) {

                $options .= '<option  value="' . $city . '">' . $city . '</option>';
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
    public function getParamsForFilter(Request $request)
    {


        $previousUrl = parse_url(url()->previous());
        $params = [];
    if (request()->routeIs('frontend.locate') ) {
            $params['path'] = \Illuminate\Support\Facades\Request::fullUrl();
            $params['city'] =  $request->city_id ?? null;
            $params['state'] =  $request->state_id ?? null;



        }else{
            parse_str($previousUrl['query'], $params);
            $params['path'] =  url()->previous();
        }

        return $params;
    }
//
//       public function getFilteredData(Request $request) {
//            $filter = $request->city;
//            $DealerData = $this->repository->filterData('city',$filter);
//
//            return response()->json($DealerData);
//
//
//    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LocateContactRequest $request)
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

