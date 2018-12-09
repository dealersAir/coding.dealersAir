<?php
class Content extends Core {
	private $_result;

	protected function run() {
		$this->getResult();
	}

	private function getResult() {
		$cont_sql = $this->_db->prepare('SELECT * FROM content WHERE url=?');
		$cont_sql->execute(array($this->_opt['url']));
		$this->_result = $cont_sql->fetch(PDO::FETCH_OBJ);
	}

	public function getContent() {
		return $this->_result;
	}
}
?>