<?php

class Menu extends MY_Model {

	// constructor
	function __construct()
	{
		parent::__construct();
	}

	function all(){
		$data = $this->db->get('menu');
		return $data->result_array();
	}

}
