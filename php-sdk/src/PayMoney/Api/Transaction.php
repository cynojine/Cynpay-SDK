<?php namespace CynPay\Api;

use CynPay\Common\CynPayModel;

/**
 * Class Transaction
 * @property \CynPay\Api\Amount amount
 *
 */

class Transaction extends CynPayModel
{

    /**
     * @param \CynPay\Api\Amount $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}