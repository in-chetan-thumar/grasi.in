<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Dealer;
use App\Models\Dealers;
use App\Repositories\DealerRepository;
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

        $llumarDealers= resolve('dealer-repo')->renderHtmlDealers($request);

        $llumarDealerData = $this->repository->getAllData('all','1');
        $states = $this->repository->getAllData('state');
        $city = $this->repository->getAllData('city');

        return view('frontend.locate',compact('llumarDealerData','states','llumarDealers'));
    }


    public function getCities($state)
    {
        try {

            $options = '<option selected="selected" value="">Select city</option>';
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

       public function getFilteredData(Request $request) {
            $filter = $request->city;
            $DealerData = $this->repository->filterData('city',$filter);
            return response()->json($DealerData);
           ;
           
        

      
        
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

    
    function getCityFromState($id)
    {

    }


}

