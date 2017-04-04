<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Maintence extends Application
{
	function __construct()
	{
		parent::__construct();

	}
	// Handle an incoming GET ... return a menu item or all of them
	function index_get()
	{
	    $key = $this->get('id');
	    if (!$key)
	    {
	        $this->response($this->menu->all(), 200);
	    } else
	    {
	        $result = $this->menu->get($key);
	        if ($result != null)
	            $this->response($result, 200);
	        else
	            $this->response(array('error' => 'Menu item not found!'), 404);
	    }
	}
	// Handle an incoming GET ... return 1 menu item
	// function item_get()
	// {
	//     $key = $this->get('id');
	//     $result = $this->menu->get($key);
	//     if ($result != null)
	//         $this->response($result, 200);
	//     else
	//         $this->response(array('error' => 'Menu item not found!'), 404);        
	// }

	// Handle an incoming PUT - crUd
	function index_put()
	{
	    $this->response('ok', 200);
	}

	// Handle an incoming POST - Crud
	function index_post()
	{
	    $this->response('ok', 200);
	}

	// Handle an incoming DELETE - cruD
	function index_delete()
	{
	    $this->response('ok', 200);
	}
}

?>