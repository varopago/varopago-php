<?php 
/**
 * Varopago API v1 Client for PHP (version 1.0.0)
 */

class  VaropagoBankAccount extends VaropagoApiResourceBase {
	protected $bank_code;
	protected $bank_name;
	protected $creation_date;

	public function delete() {
		$this->_delete();
	}
}

class VaropagoBankAccountList extends VaropagoApiDerivedResource {
}
?>