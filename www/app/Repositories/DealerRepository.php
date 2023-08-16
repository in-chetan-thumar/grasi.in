<?php

namespace App\Repositories;

use App\Models\Dealer;
use Illuminate\Support\Facades\DB;

class DealerRepository
{
    protected $model;

    public function __construct(Dealer $model)
    {
        $this->model = $model;
    }

    // Get data by id
    public function findByID($id)
    {
        return $this->model->findorFail($id);
    }


    // Create new recoard
    public function create($params)
    {
        return $this->model->create($params);
    }

    // Update recoard
    public function update($params, $id)
    {
        return $this->findByID($id)->update($params);

    }
    public function findByToken($invoice_token)
    {
        return $this->model->where('invoice_token',$invoice_token)->first();
    }

    public function filter($params)
    {


        $this->model = $this->model->when(isset($params['state']) AND !empty($params['state']) ,function ($query) use ($params){
            return $query->where('state', $params['state']);
        });


        $this->model = $this->model->when(isset($params['city']) AND !empty($params['city']) ,function ($query) use ($params){
            return $query->where('city', $params['city']);
        });
        return $this->model
            ->latest()
            ->paginate(config('constants.PER_PAGE'), ['*'],'page',!empty($params['page'])? $params['page']:'')
            ->setPath($params['path']);


    }
    public function getAllData($param="",$state="")
    {
        if($param == 'state')
        {
            return $this->model->select('state')->groupBy('state') ->pluck('state');
        }

        if($param == 'city')
        {
            if(!empty($state))
            {
                return $this->model->select('city')->where('state',$state)->groupBy('city') ->pluck('city');

            }else{

                return $this->model->select('city')->groupBy('city') ->pluck('city');
            }
        }

        if($param == 'all')
        {
            return $this->model->get();
        }



        return $this->model->all();
    }

    public function renderHtmlDealers($params)
    {
        // dd($params);
      //  $DealersData = $this->model->where($params)->get();
        $DealersData = $this->filter($params);
        return view('frontend.llumarDealers', compact('DealersData'))->render();

    }



    public function filterData($param="",$filter="")
    {

        if ($param === 'city') {
           return $this->model->where('city',$filter)->get();
        }
    }
}



