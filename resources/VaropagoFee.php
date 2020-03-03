<?php

/**
 * Varopago API v1 Client for PHP (version 1.0.0)
 */
class VaropagoFee extends VaropagoApiResourceBase
{

    protected $authorization;
    protected $creation_date;
    protected $currency;
    protected $operation_type;
    protected $status;
    protected $transaction_type;
    protected $error_message;
    protected $method;    
    protected $derivedResources = array('Refund' => null);

    public function refund($params) {
        $resource = $this->derivedResources['refunds'];
        if ($resource) {
            return parent::_create($resource->resourceName, $params, array('parent' => $this));
        }
    }    

}

class VaropagoFeeList extends VaropagoApiDerivedResource
{

    public function create($params) {
        return $this->add($params);
    }

}

?>