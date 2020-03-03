<?php 
/**
 * Varopago API v1 Client for PHP (version 1.0.0)
 */

class VaropagoTransfer extends VaropagoApiResourceBase {
	protected $authorization;
	protected $creation_date;
	protected $currency;
	protected $operation_type;
	protected $status;
	protected $transaction_type;
	protected $error_message;
	protected $method;
}

class VaropagoTransferList extends VaropagoApiDerivedResource {
	public function create($params) {
		return $this->add($params);
	}
}
?>