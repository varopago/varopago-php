<?php

/**
 * Varopago API v1 Client for PHP (version 1.0.0)
 */
class VaropagoWebhook extends VaropagoApiResourceBase
{

    protected $url;
    protected $event_types;

    public function save() {
        return $this->_update();
    }

    public function delete() {
        $this->_delete();
    }

}

?>