<?php

namespace Omnipay\Buckaroo\Message;

/**
 * Buckaroo Bancontact / Mister Cash Purchase Request
 */
class BancontactPurchaseRequest extends AbstractRequest
{
    public function getData()
    {
        $data = parent::getData();
        $data['Brq_payment_method'] = 'bancontactmrcash';

        return $data;
    }
}