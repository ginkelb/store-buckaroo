<?php

class Store_buckaroo_ext
{
    public $name = 'Store - Buckaroo Payment Gateway';
    public $version = '1.0';
    public $description = 'A custom payment gateway for Expresso Store 2.1+.';
    public $settings_exist = 'n';
    public $docs_url = 'https://exp-resso.com/docs';

    public function activate_extension()
    {
        $data = array(
            'class'     => __CLASS__,
            'method'    => 'store_payment_gateways',
            'hook'      => 'store_payment_gateways',
            'priority'  => 10,
            'settings'  => '',
            'version'   => $this->version,
            'enabled'   => 'y'
        );

        ee()->db->insert('extensions', $data);
    }

    /**
     * This hook is called when Store is searching for available payment gateways
     * We will use it to tell Store about our custom gateway
     */
    public function store_payment_gateways($gateways)
    {

        if (ee()->extensions->last_call) {
            $gateways = ee()->extensions->last_call;
        }
        
        // tell Store about our new payment gateway
        // (this must match the name of your gateway in the Omnipay directory)
        $gateways[] = 'Buckaroo';
		$gateways[] = 'Buckaroo_Bancontact';
		$gateways[] = 'Buckaroo_Giropay';
        $gateways[] = 'Buckaroo_Ideal';
		$gateways[] = 'Buckaroo_Mastercard';
		$gateways[] = 'Buckaroo_PayPal';
		$gateways[] = 'Buckaroo_Sofort';
		$gateways[] = 'Buckaroo_Visa';

        // tell PHP where to find the gateway classes
        // Store will automatically include your files when they are needed
        $composer = require(PATH_THIRD.'store/autoload.php');
        $composer->add('Omnipay', __DIR__);

        return $gateways;
    }
}