<?php

namespace jpamorimdev\ContaboApi\operations;

use jpamorimdev\ContaboApi\base\ContaboClient;

abstract class Operation
{

    protected   $client ;

    public function __construct(ContaboClient $contaboClient)
    {
        $this->client = $contaboClient;
    }

}