<?php
/**
 * Created by PhpStorm.
 * User: ADM
 * Date: 08.01.2019
 * Time: 13:41
 */

namespace App;


class StylistFilter extends QueryFilter
{

    public function name($value)
    {
        if(! $value) {return;}
        return $this->builder = $this->builder->filter(function ($item) use ($value){
           return ($item->user->name == $value);
        });

    }

    public function second_name($value)
    {
        if(! $value) {return;}
        return $this->builder = $this->builder->filter(function ($item) use ($value){
            return ($item->user->second_name == $value);
        });
    }

    public function City($value)
    {
        if(! $value) {return;}
        return $this->builder = $this->builder->filter(function ($item) use ($value){
            return ($item->user->city == $value);
        });
    }

    public function category($value)
    {
        if(! $value) {return;}
        if(is_numeric($value)) {
            return $this->builder = $this->builder->filter(function ($item) use ($value){
                return ($item->category->id == $value);
            });
        }
    }
    public function raiting($value)
    {
        if(! $value) {return;}
    }

    public function service($value)
    {
        if(! $value) {return;}
        if(is_numeric($value)) {
            return $this->builder = $this->builder->filter(function ($item) use ($value){
                return ($item->services->find($value));
            });
        }
    }

}