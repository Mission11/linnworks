<?php

namespace Mission11\Linnworks\Api;

class Auth extends ApiClient
{
    public function AuthorizeByApplication($params)
    {
        return $this->get('Auth/AuthorizeByApplication', $params);
    }
}
