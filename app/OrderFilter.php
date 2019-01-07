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
        if ($this->request->has('order_id')) {
            if (!$this->request->order_id) {
            } else
                return ($this->builder = $this->builder->where('id', '=', $this->request->order_id));
        }
        foreach ($this->filters() as $filter => $value) {

            if (method_exists($this, $filter)) {
                $this->$filter($value);
            }
        }

        return $this->builder;
    }


    public function stylist($value)

    {
        if (!$value) {
            return;
        }
        return $this->builder = $this->builder->where('stylist_id', $value);


    }


    public function client($value)

    {
        if (!$value) {
            return;
        }
        return $this->builder = $this->builder->where('client_id', $value);


    }


    public function service($value)
    {
        if (!$value) {
            return;
        }
        return $this->builder = $this->builder->where('service_id', $value);

    }

    public function status($value)
    {
        if (!$value) {
            return;
        }

        if (method_exists($this, $value)) {
            $this->$value();
        }
    }

    public function processing()
    {
        return $this->builder = $this->builder->where('confirmed_by_stylist', '1')->where('complited','0');
    }

    public function complited()
    {
        return $this->builder = $this->builder->where('complited','1');
    }

    public function notpaid()
    {
        return $this->builder = $this->builder->where('paid','0');
    }

    public function paid()
    {
        return $this->builder = $this->builder->where('paid','1');
    }

    public function canceled()
    {

//        return $this->builder = $this->builder->where('canceled_by_stylist','1');
        return $this->builder = $this->builder->filter( function ($item){
            return $item->canceled_by_client == 1 || $item->canceled_by_stylist == 1;
        });
    }


    public function confirmed_pay()
    {
        return $this->builder = $this->builder->where('confirmed_pay_by_admin','1');
    }


}