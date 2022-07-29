<?php

namespace Jonwood2\GuardianPhpSdk\Service;

class AbstractService
{
    public function __construct($client)
    {
        $this->client = $client;
    }
}
