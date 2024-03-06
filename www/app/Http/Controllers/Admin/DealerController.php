<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\DealerRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DealerController extends Controller
{

    protected $repository;

    public function __construct(DealerRepository $repository)
    {
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $table = resolve('dealer-repo')->renderHtmlTable($this->getParamsForFilter($request));
        $status = ['Y' => 'Active', 'N' => 'Inactive'];
        return view('admin.dealer.list', compact('table', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [];
        try {
            // $states = $this->repository->getAllData('state');
            // $cities = $this->repository->getAllData('city');
            $data['error'] = false;
            $data['view'] = view('admin.dealer.offcanvas')->render();
            return response()->json($data);
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
        }
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $params = [];
            DB::beginTransaction();
            // Create Dealer
            $params['sort_id'] = $request->sort_id;
            $params['dealership_name'] = $request->dealership_name;
            $params['address'] = $request->address;
            $params['pincode'] = $request->pincode;
            $params['state'] = $request->state;
            $params['city'] = $request->city;
            $params['contact_name'] = $request->contact_name;
            $params['contact_number'] = $request->contact_number;
            $params['contact_email'] = $request->contact_email;
            $params['url'] = $request->url;
            $params['latitude'] = $request->latitude;
            $params['longitude'] = $request->longitude;
            $dealer = resolve('dealer-repo')->create($params);
            if (!empty($dealer)) {
                $data['error'] = false;
                $data['message'] = 'Dealer create successfully.';
                $data['view'] = resolve('dealer-repo')->renderHtmlTable($this->getParamsForFilter($request));
                DB::commit();
                return response()->json($data);
            }
            $data['error'] = true;
            $data['message'] = 'Dealer not created successfully..!';
            return response()->json($data);
        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
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
        $data = [];
        try {
            $dealer = resolve('dealer-repo')->findByID($id);
            $data['error'] = false;
            $data['view'] = view('admin.dealer.offcanvas', compact('dealer'))->render();
            return response()->json($data);
        } catch (\Exception $e) {
            $data['error'] = true;
            $data['message'] = $e->getMessage();
        }
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $data = $params = [];
            DB::beginTransaction();
            // Update Dealer
            $params['sort_id'] = $request->sort_id;
            $params['dealership_name'] = $request->dealership_name;
            $params['address'] = $request->address;
            $params['pincode'] = $request->pincode;
            $params['state'] = $request->state;
            $params['city'] = $request->city;
            $params['contact_name'] = $request->contact_name;
            $params['contact_number'] = $request->contact_number;
            $params['contact_email'] = $request->contact_email;
            $params['url'] = $request->url;
            $params['latitude'] = $request->latitude;
            $params['longitude'] = $request->longitude;
            $dealer = resolve('dealer-repo')->update($params, $id);
            if (!empty($dealer)) {
                $data['error'] = false;
                $data['message'] = 'Dealer Updated successfully.';
                $data['view'] = resolve('dealer-repo')->renderHtmlTable($this->getParamsForFilter($request));
                DB::commit();
                return response()->json($data);
            }
            $data['error'] = true;
            $data['message'] = 'Dealer not Updated successfully..!';
            return response()->json($data);
        } catch (\Exception $e) {
            DB::rollBack();
            $data['error'] = true;
            $data['message'] = $e->getMessage();
            return response()->json($data);
        }
    }

    /**
     * Remove the specified resource from storage.
     */

    public function deleteDealer(string $id)
    {
        try {
            $dealer = resolve('dealer-repo')->findById($id);
            if (!empty($dealer)) {
                $dealer->delete();
                toastr()->success($dealer->dealership_name . ' deleted successfully..!');
                return redirect()->route('dealers.index');
            } else {
                toastr()->error('Dealer not found.!');
            }
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }

    public function changeStatus($id)
    {
        try {
            $dealer = resolve('dealer-repo')->changeStatus($id);
            toastr()->success('Status changed successfully..!');
            return redirect()->route('dealers.index');
        } catch (\Exception $e) {
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
    }


    public function getParamsForFilter(Request $request)
    {
        $previousUrl = parse_url(url()->previous());
        $params = [];

        if (request()->routeIs('dealers.index') || !isset($previousUrl['query'])) {
            $params['query_str'] = $request->query_str ?? '';
            $params['is_active'] = $request->is_active ?? '';
            $params['page'] = $request->page ?? 0;
            $params['type'] = $request->type ?? null;
            $params['start_date'] = $request->start_date ?? null;
            $params['end_date'] = $request->end_date ?? null;
            $params['path'] = \Illuminate\Support\Facades\Request::fullUrl();

        } else {
            parse_str($previousUrl['query'], $params);
            $params['path'] = url()->previous();
        }

        return $params;
    }
}
