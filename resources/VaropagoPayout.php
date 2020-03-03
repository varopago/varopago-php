<?php 
/**
 * Varopago API v1 Client for PHP (version 1.0.0)
 */

class VaropagoPayout extends VaropagoApiResourceBase {
	protected $authorization;
	protected $creation_date;
	protected $currency;
	protected $operation_type;
	protected $status;
	protected $transaction_type;
	protected $error_message;
	protected $method;

	// temporal hack
	// TODO: checar porque no instancia Varopago al recibir el parametro
	protected $card;
}

class VaropagoPayoutList extends VaropagoApiDerivedResource {
	public function create($params) {
		return $this->add($params);
	}
}
?>