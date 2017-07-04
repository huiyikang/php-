<?php
	
	class BinarySort extends Strategy{
		public function getSort(SortArr $sort){
			//插入二分法排序     插入排序的升级版
			//工作原理，
			$array = $sort::$_arr;
			//稳定算法，因为相同的两个值位置可能互换
			$len = sizeof($array);
			
			for($i=1;$i<$len;$i++){
				//将已经排序的数组二分
				$left = 0;
				$right = $i -1;
				$tmp = $array[$i];
				while($left<=$right){
					$middle = floor(($left + $right)/2);
					echo $middle.'<br />';
					if($array[$middle]>$tmp){
						$right = $middle - 1;
					}else{
						//不稳定算法，不稳定发生在这个位置交换的时候
						$left = $middle + 1;
					}
				}
				
				//将middle以后的所有单元向右挪一位
				for($j = $i-1;$j>=$left;$j--){
					$array[$j+1] = $array[$j];
				}
				
				//插入到已经排序好的牌中
				$array[$left] = $tmp;
				
			}
			return $array;			
		}
	}

?>