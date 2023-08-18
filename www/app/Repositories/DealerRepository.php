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
    public function filter($params)
    {

        $this->model = $this->model->when(isset($params['state']) AND !empty($params['state']) ,function ($query) use ($params){
            return $query->where('state', $params['state']);
        });


        $this->model = $this->model->when(isset($params['city']) AND !empty($params['city']) ,function ($query) use ($params){
            return $query->where('city', $params['city']);
        });
//        return $this->model->get();
        return $this->model
            ->latest()
            ->paginate(config('constants.PER_PAGE'), ['*'], 'page', !empty($params['page']) ? $params['page'] : '')
            ->setPath($params['path']);

    }
    public function renderHtmlDealers($params)
    {

//        $DealersData = $this->model->where('city',$filter)->get();
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



