<?php

namespace App\Repositories;

class Producto extends HttpRequestClass
{
	public function __construct(){
		parent::__construct();
	}

	public function all()
	{
		return $this->get('products');
	}
}

?>