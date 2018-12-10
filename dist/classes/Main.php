<?php
class Main extends Core {
	private $_content;

	protected function run() {
		$this->fetchContent();
	}

	private function fetchContent() {
		$cont = $this->_db->prepare('SELECT * FROM content WHERE url=?');
		$cont->execute(array($this->_opt['url']));
		$this->_content = $cont->fetch(PDO::FETCH_OBJ);
	}

	public function getContent() {
		return $this->_content;
	}
}
?>