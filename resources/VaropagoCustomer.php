<?php 
/**
 * Varopago API v1 Client for PHP (version 1.0.0)
 */

class VaropagoCustomer extends VaropagoApiResourceBase {
	protected $status;
	protected $creation_date;
	protected $balance;
	protected $clabe;
	protected $derivedResources = array('Card' => array(), 
										'BankAccount' => array(), 
										'Charge' => array(), 
										'Transfer' => array(), 
										'Payout' => array(), 
										'Subscription' => array());

	public function save() {
		return $this->_update();
	}
	public function delete() {
		$this->_delete();
	}
}

class VaropagoCustomerList extends VaropagoApiDerivedResource {
}
?>