<?php
abstract class Core {
	
	protected $_db;
	protected $_opt;
	public $meta;

	public function __construct($opt = '') {
		//$db = DbConnect::getInstance();
		//$this->_db = $db->getDb();
		$this->_opt = $opt;
		$this->run();
	}

	public function getMenu($menu_arr){
		$menu = '<ul class="menu">';
		foreach($menu_arr as $key=>$val){
			$menu .= '<li class="menu__item ';
			
			if ($key == $this->_route) {
				$menu .= 'menu__item_current';
			} else if($key == $this->_template){
				$menu .= 'menu__item_current-parent';
			} else if (is_array($val)){
				foreach($val[1] as $s_key=>$s_val){
					if ($s_key == $this->_route) {
						$menu .= 'menu__item_current-parent';
					}
				}
			}
			
			if(is_array($val)){
				$menu .= ' menu__item_has-children"><a href="/'.$key.'">'.$val[0].'</a>';
				$menu .= '<ul class="menu__sub-menu">';
				foreach($val[1] as $s_key=>$s_val){
					$menu .= '<li><a href="/'.$s_key.'" class="menu__sub-menu-a">'.$s_val.'</a></li>';
				}
				$menu .= '</ul>';
			} else {
				$menu .= '"><a href="/'.$key.'" class="menu__a">'.$val.'</a>';
			}

			$menu .= '</li>';
		}
		$menu .= '</ul>';
		
		return $menu;
	}
	
}
?>