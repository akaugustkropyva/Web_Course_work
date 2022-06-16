<?php

namespace App\Filters;

class PosterFilter extends QueryFilter {

    public function hall_id($id = null){
        if ($id == 1){
            return $this->builder;
        } else
            return $this->builder->where('hall_id', $id);
    }

    public function date_choice($param) {

        if ($param === 'today') {
            return $this->getAndWhere(now()->format('Y-m-d'));
        } elseif ($param === 'tomorrow') {
            return $this->getAndWhere(now()->modify('+1 day')->format('Y-m-d'));
        } elseif ($param === 'week') {
            return $this->getAndWhere(now()->modify('+7 days')->format('Y-m-d'));
        } elseif ($param === 'two_weeks') {
            return $this->getAndWhere(now()->modify('+14 days')->format('Y-m-d'));
        } elseif ($param === 'month') {
            return $this->getAndWhere(now()->modify('+30 days')->format('Y-m-d'));
        }
        return $this->builder;
    }

    public function orderBy($param){

        if($param === 'popularity'){
            return $this->builder->orderBy($param, 'DESC');
        }
        return $this->builder->orderBy($param);
    }

    /**
     * @param string $var
     * @return mixed
     */
    public function getAndWhere(string $var): mixed
    {
        return $this->builder
            ->whereDate('from', '<=', $var)
            ->whereDate('to', '>=', $var);
    }
}
