<?php

namespace Omnipay\Buckaroo\Message;

/**
 * Buckaroo GiroPay Purchase Request
 */
class GiropayPurchaseRequest extends AbstractRequest
{
    public function getData()
    {
        $data = parent::getData();
        $data['Brq_payment_method'] = 'giropay';

        return $data;
    }
}