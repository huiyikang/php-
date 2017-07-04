<?php
	
	class SelectionSort extends Strategy{
		public function getSort(SortArr $sort){
			//选择排序
			//工作原理，首先找到最小元素放到数组的首位，其次再在接下来的数组中找到最小的数，放在首位的后一个位置，依次类推
			$array = $sort::$_arr;
			//不稳定算法，因为相同的两个值位置可能互换
			$len = sizeof($array);
			//先进行循环依次循环出最小值
			for($i = 0;$i<$len;$i++){
				//假设最小值是$p,每循环一次，$i自动处在最小位置的后一位，已经排序过得就不用再进行位置交换
				$min=$i;
				for($j = $i+1;$j<$len;$j++){
					if($array[$min]>$array[$j]){
						$min = $j;
					}
				}
					
				//交换位置,判断如果$min不等于$i则进行位置交换
				if($min!=$i){
					$tmp = $array[$min];
					$array[$min] = $array[$i];
					$array[$i] = $tmp;
				}
			}
			return $array;
		}
	}


?>