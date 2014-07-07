<?php

namespace Omnipay\Buckaroo;

/**
 * Buckaroo Giropay Gateway
 */
class GiropayGateway extends Gateway
{
    public function getName()
    {
        return 'Buckaroo - Giropay';
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Buckaroo\Message\GiropayPurchaseRequest', $parameters);
    }
}
