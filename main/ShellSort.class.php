<?php

	class ShellSort extends Strategy{
		
		public function getSort(SortArr $sort){
			//不稳定算法,不稳定发生在交换的时候
			$arr = $sort::$_arr;
			
			//数组长度
			$len = count($arr);
			for($k = $len/2;$k>0;$k=floor($k/2)){
				//进行插入排序
				for($i = 0;$i<=$k;$i++){
					//插入排序算法
					for($j = $k - $i;$j>=0,($k+$j)<$len;$j += $k){
						//echo $j.'<br />';
						if($arr[$j] > $arr[$j + $k]){
							//交换位置
							$tmp = $arr[$j];
							$arr[$j] = $arr[$j + $k];
							$arr[$j + $k] = $tmp;
						}
					}
				}
			}

			return $arr;
			
		}
		
		
		
	}

?>