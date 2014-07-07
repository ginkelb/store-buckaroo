<?php

namespace Omnipay\Buckaroo\Message;

/**
 * Buckaroo Sofort Purchase Request
 */
class SofortPurchaseRequest extends AbstractRequest
{
    public function getData()
    {
        $data = parent::getData();
        $data['Brq_payment_method'] = 'Sofortueberweisung';

        return $data;
    }
}