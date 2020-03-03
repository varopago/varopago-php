<?php

/**
 * Varopago API v1 Client for PHP (version 1.0.0)
 */
class VaropagoCard extends VaropagoApiResourceBase
{

    protected $type;
    protected $brand;
    protected $allows_charges;
    protected $allows_payouts;
    protected $creation_date;
    protected $bank_name;
    protected $bank_code;
    protected $customer_id;

    public function delete() {
        $this->_delete();
    }

    public function get($param) {
        return $this->_getAttributes($param);
    }

}

class VaropagoCardList extends VaropagoApiDerivedResource
{
    
}

?>