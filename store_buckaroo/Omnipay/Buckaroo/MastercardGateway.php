<?php

namespace Omnipay\Buckaroo;

/**
 * Buckaroo Mastercard Gateway
 */
class MastercardGateway extends Gateway
{
    public function getName()
    {
        return 'Buckaroo - MasterCard';
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Buckaroo\Message\MastercardPurchaseRequest', $parameters);
    }
}

