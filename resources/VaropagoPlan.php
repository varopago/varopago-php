<?php 
/**
 * Varopago API v1 Client for PHP (version 1.0.0)
 */

class VaropagoPlan extends VaropagoApiResourceBase {
	protected $creation_date;
	protected $currency;
	protected $amount;
	protected $repeat_every;
	protected $repeat_unit;
	protected $retry_times;
	protected $status;
	protected $status_after_retry;

	protected $derivedResources = array('Subscription' => array());

	public function save() {
		return $this->_update();
	}
	public function delete() {
		$this->_delete();
	}
}

class VaropagoPlanList extends VaropagoApiDerivedResource {
}
?>