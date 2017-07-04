<?php
	class CookTailSort extends Strategy{
		
		public function getSort(SortArr $sort){
			$array = $sort::$_arr;
			//稳定算法
			$len = sizeof($array);
			
			for ($i =0;$i<$len/2;$i++){
				//左边过去，相加
				for($j=$i;$j<$len-$i-1;$j++){
					if($array[$j]>$array[$j+1]){
						$tmp = $array[$j+1];
						$array[$j+1] = $array[$j];
						$array[$j] = $tmp;
					}
				}
				
				//右边回来相减
				for($k = $len-1-$i;$k>$i;$k--){
					if($array[$k]<$array[$k-1]){
						$tmp = $array[$k-1];
						$array[$k-1] = $array[$k];
						$array[$k] = $tmp;
					}
				}				
			}
			
			return $array;
		}
		
	}
	
?>