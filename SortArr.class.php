<?php
	class SortArr{
		//对象存储
		private $_instance;
		static $_arr;
		
		
		public function __construct(Strategy $strategy,$arr){
			$this->_instance = $strategy;
			self::$_arr = $arr;
		}
		
		public function __get($key){
			return $this->$key;
		}
		
		
		//调用相应算法
		public function getStrategy(){
			return $this->_instance->getSort($this);
		}
		
	}
?>