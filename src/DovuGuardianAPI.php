<?php

namespace Jonwood2\GuardianPhpSdk;

use Jonwood2\GuardianPhpSdk\Service\ServiceFactory;

class DovuGuardianAPI extends BaseAPIClient
{
    /**
     * @var serviceFactory
    */
    private $serviceFactory;

    public function __get(string $name)
    {
        $this->serviceFactory ??= new ServiceFactory($this);

        return $this->serviceFactory->__get($name);
    }
}
