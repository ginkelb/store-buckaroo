<?php

namespace Omnipay\Buckaroo;

/**
 * Buckaroo Sofort Gateway
 */
class SofortGateway extends Gateway
{
    public function getName()
    {
        return 'Buckaroo - Sofort';
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Buckaroo\Message\SofortPurchaseRequest', $parameters);
    }
}
