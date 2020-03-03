<?php

/**
 * Varopago API v1 Client for PHP (version 1.0.0)
 */
class VaropagoToken extends VaropagoApiResourceBase
{
    protected $card;

    public function get($param) {
        return $this->_getAttributes($param);
    }
}

?>