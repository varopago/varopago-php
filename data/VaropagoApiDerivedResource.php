<?php 
/**
 * Varopago API v1 Client for PHP (version 1.0.0)
 */

class VaropagoApiDerivedResource extends VaropagoApiResourceBase {
	private $cacheList = array();

	protected static function getInstance($resourceName, $p = null) {
		if (class_exists($resourceName.'List', false)) {
			$resource = $resourceName.'List';
			return new $resource($resourceName);
		}
		return new self($resourceName);
	}
	protected function addResource($resource, $id=null) {
		if (!$id && isset($resource->id)) {
			$id = $resource->id;
		} else if (is_string($id)) {
			$id = strtolower($id);
		} else {
			$id = count($this->cacheList) + 1;
		}
		if (!$this->isResourceListed($id)) {
			$resource->parent = $this;
			$this->cacheList[$id] = $resource;
		}
	}
	protected function getResource($id) {
		$id = strtolower($id);
		if ($this->isResourceListed($id)) {
			return $this->cacheList[$id];
		}
	}
	protected function removeResource($id) {
		$id = strtolower($id);
		if ($this->isResourceListed($id)) {
			unset($this->cacheList[$id]);
		}
	}
	protected function isResourceListed($id) {
		$id = strtolower($id);
		return (isset($this->cacheList[$id]) && !empty($this->cacheList[$id]));
	}
	
	
	// ---------------------------------------------------------
	// ------------------  PUBLIC FUNCTIONS  -------------------
	
	
	public function add($params) {
		VaropagoConsole::trace('VaropagoApiDerivedResource @add');
		
		// TODO: validate call when the parent has not a valid ID
		$resource = parent::_create($this->resourceName, $params, array('parent' => $this));
		$this->addResource($resource);
		return $resource;
	}
	public function get($id) {
		VaropagoConsole::trace('VaropagoApiDerivedResource @get');

		if ($this->isResourceListed($id)) {	
			return $this->getResource($id);
		}
		$resource = parent::_retrieve($this->resourceName, $id, array('parent' => $this));
		$this->addResource($resource);
		return $resource;
	}
	public function getList($params) {
		VaropagoConsole::trace('VaropagoApiDerivedResource @find');

		$list = parent::_find($this->resourceName, $params, array('parent' => $this));
		foreach ($list as $resource) {
			$this->addResource($resource);
		}
		return $list;
	}
}
?>