<?php 

class math extends CI_Model{

	public function add($i,$j){
		return $i+$j;
	}

	public function sub($i, $j){
		return $i - $j;
	}
}

?>