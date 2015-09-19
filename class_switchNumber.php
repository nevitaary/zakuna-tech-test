<?php
class SwitchNumber {
	var $a;
	var $b;

	public function __construct($a, $b){
		$a = $a+$b;
		$b = $a-$b;
		$a = $a - $b;
		
		$this->a = $a;
		$this->b = $b;
			
	}
	
	
	function set_a($new_a) {
		$this->a = $new_a;
	}	  
	
	function get_a() {	
		return $this->name;	
	}
	
	function set_b($new_b) {
		$this->b = $new_b;
	}	  
	
	function get_b() {	
		return $this->b;	
	}

	
}

?>
