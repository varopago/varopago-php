<?php 
/**
 * Varopago API v1 Client for PHP (version 1.0.0)
 */

class VaropagoRefund extends VaropagoApiResourceBase {
	protected function getResourceUrlName($p = true){
		return parent::getResourceUrlName(false);
	}
}
?>