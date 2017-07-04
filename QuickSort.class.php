<?php
	class QuickSort extends Strategy{
		
		public function getSort(SortArr $sort){
		//快速排序，不稳定算法，定义两个数组，一个是左数组，一个是右数组，找到一个基准点，如果大于基准点，放在右数组，否则放在左数组
		$array = $sort::$_arr;
		
		$new_arr = $this->qSort($array);
		return $new_arr;
		
		}
		
		
		
		function qSort($array){
			if(!is_array($array)) return ;
			
			$len = sizeof($array);
			if($len<=1) return $array; 

			//定义两个数组，以第一个数组
			$left = array();
			$right = array();
			
			for($i = 1;$i<$len;$i++){
				//与插入排序有些相似
				if($array[$i]>$array[0]){
					//放入右数组
					$right[] = $array[$i];
				}else{
					//放入左数组
					$left[] = $array[$i];
				}
			}
			
			//递归一次
			$left = $this->qSort($left);
			$right = $this->qSort($right);
			//合并数组
			return array_merge($left,array($array[0]),$right);
		}
		
		
	}
	
	
	
	

?>