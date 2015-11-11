<?php

class Lang {
	var $name;
	var $more;
	
	function __construct($name, $more = '') {
		$this->name = $name;
	}
	
	function hashCode() {
		return (string)($this->name. $this->more);
	}
}

?>
