<?php

namespace Omnipay\Buckaroo\Message;

/**
 * Buckaroo Mastercard Purchase Request
 */
class MastercardPurchaseRequest extends AbstractRequest
{
    public function getData()
    {
        $data = parent::getData();
        $data['Brq_payment_method'] = 'mastercard';

        return $data;
    }
}
