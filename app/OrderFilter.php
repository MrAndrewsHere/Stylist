<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 04.01.2019
 * Time: 3:37
 */

namespace App;
use App\QueryFilter;
use App\stylist;

class OrderFilter extends QueryFilter
{


    public function apply()
    {
        if($this->request->has('order_id'))
        {
            if(! $this->request->order_id) {}
            else
            return ($this->builder =  $this->builder->where('id','=',$this->request->order_id));
        }
        foreach ($this->filters() as $filter => $value)
        {

            if(method_exists($this,$filter))
            {
                $this->$filter($value);
            }
        }

        return  $this->builder;
    }


    public function stylist($value)

    {
        if(! $value) {return;}
            return $this->builder = $this->builder->where('stylist_id',$value);




    }


    public function client($value)

    {
        if(! $value) {return;}
        return $this->builder = $this->builder->where('client_id',$value);




    }


    public function service($value)
    {
        if(! $value) {return;}
        return $this->builder = $this->builder->where('service_id',$value);

    }



}