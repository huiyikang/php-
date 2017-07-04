<?php
	
	class InsertSort extends Strategy{
		public function getSort(SortArr $sort){
			//插入排序    小于千的数量级排序
			//工作原理，从第一个元素开始，假设第一个是已经排序的，从剩下的没有排序的牌中选择一张牌，插入已经排序的对应的位置
			$array = $sort::$_arr;
			//稳定算法，因为相同的两个值位置可能互换
			$len = sizeof($array);
			for($i=1;$i<$len;$i++){
				//因为下标为0的那张默认是已经排好序的，所以$i从1开始计数
				$tmp = $array[$i];
				for($j = $i-1;$j>=0;$j--){
					//如果选到的牌比已经排序的牌小，则向左移
					if($tmp<$array[$j]){
						//进行交换
						$array[$j+1] = $array[$j];
						$array[$j] = $tmp;
					}else{
						break;
					}
				}
			}
			return $array;			
		}
	}

?>