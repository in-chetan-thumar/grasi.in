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
            return $this->model->select('state')->where('is_active', 'Y')->groupBy('state')->pluck('state');
        }

        if($param == 'city')
        {
            if(!empty($state))
            {
                return $this->model->select('city')->where('is_active', 'Y')->where('state',$state)->groupBy('city') ->pluck('city');

            }else{

                return $this->model->select('city')->where('is_active', 'Y')->groupBy('city') ->pluck('city', 'city');
            }
        }

        if($param == 'all')
        {
            return $this->model->where('is_active', 'Y')->get();
        }



        return $this->model->all();
    }
    public function filter($params)
    {
        $params['is_active'] =  'Y' ;

        $this->model = $this->model->when(isset($params['state']) AND !empty($params['state']) ,function ($query) use ($params){
            return $query->where('state', $params['state']);
        });


        $this->model = $this->model->when(isset($params['city']) AND !empty($params['city']) ,function ($query) use ($params){
            return $query->where('city', $params['city']);
        });
        $this->model = $this->model->when(isset($params['is_active']) AND !empty($params['is_active']) ,function ($query) use ($params){
            return $query->where('is_active', $params['is_active']);
        });
//        return $this->model->get();
        return $this->model
            ->orderBy('sort_id')
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
           return $this->model->where('is_active', 'Y')->where('city',$filter)->get();
        }
    }
}



