<?php
	class Bubble extends Strategy{ 
		public function getSort(SortArr $sort){
			$array = $sort::$_arr;
			//�ȶ��㷨
			$len = sizeof($array);

			for($i=0; $i<$len; $i++){
				for($j=0; $j<$len-1-$i; $j++){
					//λ�ý���
					if($array[$j] > $array[$j+1]){
						$tmp = $array[$j];
						$array[$j] = $array[$j+1];
						$array[$j+1] = $tmp;
					}
				}
			}
			return $array;
		}
	}
?>