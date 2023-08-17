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

    public function renderHtmlDealers($param="",$filter="")
    {
        
        $DealersData = $this->model->where('city',$filter)->get();
       
        return view('frontend.llumarDealers', compact('DealersData'))->render();


    }

    public function filterData($param="",$filter="")
    {
        
        if ($param === 'city') {
           return $this->model->where('city',$filter)->get();          
        } 
    }         
}



