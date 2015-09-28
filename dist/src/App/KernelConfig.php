<?php

/**
 * Mmi Framework (https://github.com/milejko/mmi.git)
 * 
 * @link       https://github.com/milejko/mmi.git
 * @copyright  Copyright (c) 2010-2014 Mariusz Miłejko (http://milejko.com)
 * @license    http://milejko.com/new-bsd.txt New BSD License
 */

namespace App;

/**
 * Ogólna konfiguracja aplikacji
 */
class KernelConfig extends \Cms\App\KernelConfig {

	/**
	 * Konstruktor
	 */
	public function __construct() {
		parent::__construct();
		//logowanie błędów
		$this->log->addInstance(\Mmi\Log\ConfigInstance::factory()->setLevelError());
	}

}
