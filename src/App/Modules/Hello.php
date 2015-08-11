<?php 

namespace App\Modules

use Greenfly\Module;
use Greenfly\Template;

class Hello extends Module {
	

	public static function world ($config)

	{

		var_dump($config);

	}



}