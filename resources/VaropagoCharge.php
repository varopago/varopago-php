<?php

/**
 * Varopago API v1 Client for PHP (version 1.0.0)
 */
class VaropagoCharge extends VaropagoApiResourceBase
{

    protected $authorization;
    protected $creation_date;
    protected $currency;
    protected $customer_id;
    protected $operation_type;
    protected $status;
    protected $transaction_type;
    // temporal hack
    // TODO: checar porque no instancia Varopagocard al recibir el parametro
    protected $card;
    protected $derivedResources = array('Refund' => null, 'Capture' => null);

    public function refund($params) {
        $resource = $this->derivedResources['refunds'];
        if ($resource) {
            return parent::_create($resource->resourceName, $params, array('parent' => $this));
        }
    }

    public function capture($params) {
        $resource = $this->derivedResources['captures'];
        if ($resource) {
            return parent::_create($resource->resourceName, $params, array('parent' => $this));
        }
    }

    public function update($params) {
        return $this->_updateCharge($params);
    }

}

class VaropagoChargeList extends VaropagoApiDerivedResource
{

    public function create($params) {
        return $this->add($params);
    }

}

?>