<?php

namespace App\Repositories;

use App\Models\Dealer;

class DealerRepository
{
    protected $model;

    public function __construct(Dealer $model)
    {
        $this->model = $model;
    }

    public function findByID($id)
    {
        return $this->model->findorFail($id);
    }


    // Create new record
    public function create($params)
    {
        $dealer = $this->model->create($params);

        return $dealer;
    }

    // Update record
    public function update($params, $id)
    {
        $dealer = $this->findByID($id)->update($params);
        return $dealer;
    }

    public function getAllData($param = "", $state = "")
    {
        if ($param == 'state') {
            return $this->model->select('state')->where('is_active', 'Y')->groupBy('state')->pluck('state');
        }

        if ($param == 'city') {
          
            if (!empty($state)) {
                return $this->model->select('city')->where('is_active', 'Y')->where('state', $state)->groupBy('city')->pluck('city', 'city');

            } else {

                return $this->model->select('city')->where('is_active', 'Y')->groupBy('city')->pluck('city', 'city');
            }
        }   
        if ($param == 'all') {
            return $this->model->where('is_active', 'Y')->get();
        }



        return $this->model->all();
    }
    public function filter($params)
    {

        $this->model = $this->model->when(isset($params['query_str']) and !empty($params['query_str']), function ($query) use ($params) {
            $query->where('contact_name', 'LIKE', '%' . $params['query_str'] . "%")
                ->orWhere('dealership_name', 'LIKE', '%' . $params['query_str'] . "%")
                ->orWhere('state', 'LIKE', '%' . $params['query_str'] . "%")
                ->orWhere('city', 'LIKE', '%' . $params['query_str'] . "%")
                ->orWhere('address', 'LIKE', '%' . $params['query_str'] . "%")
                ->orWhere('pincode', 'LIKE', '%' . $params['query_str'] . "%")
                ->orWhere('url', 'LIKE', '%' . $params['query_str'] . "%")
                ->orWhere('latitude', 'LIKE', '%' . $params['query_str'] . "%")
                ->orWhere('longitude', 'LIKE', '%' . $params['query_str'] . "%")
                ->orWhere('contact_email', 'LIKE', '%' . $params['query_str'] . "%")
                ->orWhere('contact_number', 'LIKE', '%' . $params['query_str'] . "%");
        });

        $this->model = $this->model->when(isset($params['state']) and !empty($params['state']), function ($query) use ($params) {
            return $query->where('state', $params['state']);
        });


        $this->model = $this->model->when(isset($params['city']) and !empty($params['city']), function ($query) use ($params) {
            return $query->where('city', $params['city']);
        });
        $this->model = $this->model->when(isset($params['is_active']) and !empty($params['is_active']), function ($query) use ($params) {
            return $query->where('is_active', $params['is_active']);
        });
        //        return $this->model->get();
        return $this->model
            ->orderBy('sort_id')
            ->paginate(config('constants.PER_PAGE'), ['*'], 'page', !empty($params['page']) ? $params['page'] : '')
            ->setPath($params['path']);

    }

    public function renderHtmlTable($params)
    {
        $tableData = $this->filter($params);
        return view('admin.dealer.table', compact('tableData'))->render();
    }
    public function renderHtmlDealers_old($params)
    {
        //        $DealersData = $this->model->where('city',$filter)->get();
        $params['is_active'] = 'Y';
        $DealersData = $this->filter($params);

        return view('frontend.llumarDealers', compact('DealersData'))->render();
    }

    public function renderHtmlDealers($params)
    {
        $params['is_active'] = 'Y';
        $DealersData = $this->filter($params);
        return view('llumar.locate_dealers.table', compact('DealersData'))->render();
    }
    public function changeStatus($id)
    {
        $user = $this->findByID($id);
        if ($user->is_active == 'Y') {
            $user->is_active = 'N';
        } else {
            $user->is_active = 'Y';
        }

        return $user->save();
    }

    public function filterData($param = "", $filter = "")
    {

        if ($param === 'city') {
            return $this->model->where('is_active', 'Y')->where('city', $filter)->get();
        }
    }
}



