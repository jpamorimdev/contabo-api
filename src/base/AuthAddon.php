<?php

namespace jpamorimdev\ContaboApi\base;

use jpamorimdev\ContaboApi\exceptions\ContaboException;
use jpamorimdev\ContaboApi\utilities\config;

trait AuthAddon
{


    /**
     * @throws ContaboException
     */
    protected function generateAccessToken()
    {

        return  $this->execute( 'post' ,config::AUTH_URL, [
            'form_params' =>
                [
                    'client_id' => $this->clientID,
                    'client_secret' => $this->clientSecret,
                    'username' => ($this->APIUser),
                    'password' => ($this->APIPassword),
                    'grant_type' => 'password'
                ],

        ] )->access_token;

    }


}