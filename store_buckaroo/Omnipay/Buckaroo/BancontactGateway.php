<?php

namespace Omnipay\Buckaroo;

/**
 * Buckaroo Bancontact / Mister Cash Gateway
 */
class BancontactGateway extends Gateway
{
    public function getName()
    {
        return 'Buckaroo - Bancontact/MrCash';
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Buckaroo\Message\BancontactPurchaseRequest', $parameters);
    }
}
