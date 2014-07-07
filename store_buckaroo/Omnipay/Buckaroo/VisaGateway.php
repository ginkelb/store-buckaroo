<?php

namespace Omnipay\Buckaroo;

/**
 * Buckaroo Visa Gateway
 */
class VisaGateway extends Gateway
{
    public function getName()
    {
        return 'Buckaroo - Visa';
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Buckaroo\Message\VisaPurchaseRequest', $parameters);
    }
}

