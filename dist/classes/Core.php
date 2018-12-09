<?php
abstract class Core {
	protected $_db;
	protected $_opt;

	public function __construct($opt = array()) {
		$db = DbConnect::getInstance();
		$this->_db = $db->getDb();
		$this->_opt = $opt;
		$this->run();
	}
}
?>