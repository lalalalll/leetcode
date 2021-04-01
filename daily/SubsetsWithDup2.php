<?php
	
	namespace daily;
	
	class SubsetsWithDup2{
		
		private $result = [];
		
		
		/**
		 * @param Integer[] $nums
		 *
		 * @return Integer[][]
		 */
		function subsetsWithDup($nums){
			
			sort($nums);
			
			$this->dfs($nums, count($nums));
			
			return $this->result;
		}
		
		
		private function dfs($nums, $nCount, $res = [], $pos = 0){
			
			$this->result[] = $res;
			
			if ($pos == count($nums)) {
				
				return;
			}
			
			for ($i = $pos; $i < $nCount; $i++) {
				
				if ($i > $pos && $nums[$i] == $nums[$i - 1]) {
				
					continue;
				}
				
				array_push($res, $nums[$i]);
				
				$this->dfs($nums, $nCount, $res, $i + 1);
				
				array_pop($res);
			}
			
			return;
		}
	}
	
	
	var_dump((new SubsetsWithDup2())->subsetsWithDup([1, 2, 2]));
