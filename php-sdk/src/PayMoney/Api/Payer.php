<?php
namespace CynPay\Api;

use CynPay\Common\CynPayModel;

/**
 * Class Payer
 * @property string paymentMethod
 *
 */
class Payer extends CynPayModel
{

    /**
     * Valid Values: ["CynPay"]
     * method will be like CynPay, paypal, stripe etc
     * @param  string  $method
     * @return $this
     */
    public function setPaymentMethod($method)
    {
        $this->paymentMethod = $method;
        return $this;
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

}
