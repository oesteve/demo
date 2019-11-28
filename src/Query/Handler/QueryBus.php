<?php


namespace App\Query\Handler;


interface QueryBus
{
    /**
     * @param $query
     * @return mixed
     */
    public function handle($query);
}