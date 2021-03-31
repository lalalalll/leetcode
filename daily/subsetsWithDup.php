<?php
	
	/**
	 * 给你一个整数数组 nums ，其中可能包含重复元素，请你返回该数组所有可能的子集（幂集）。
	 *
	 * 解集 不能 包含重复的子集。返回的解集中，子集可以按 任意顺序 排列。
	 *
	 *  
	 * 示例 1：
	 *
	 * 输入：nums = [1,2,2]
	 * 输出：[[],[1],[1,2],[1,2,2],[2],[2,2]]
	 * 示例 2：
	 *
	 * 输入：nums = [0]
	 * 输出：[[],[0]]
	 *  
	 *
	 * 提示：
	 *
	 * 1 <= nums.length <= 10
	 * -10 <= nums[i] <= 10
	 *
	 *
	 * @param $nums
	 *
	 * @return array|array[]
	 *
	 */
	function subsetsWithDup($nums){
		
		sort($nums);
		
		if (is_null($nums)) {
			return [];
		}
		
		// 初始化结果为[[]]
		$result = [[]];
		
		if (empty($nums)) {
			
			return $result;
		}
		
		// 遍历一遍题目给出数组nums
		foreach ($nums as $num) {
			
			// 遍历结果集，并尝试子集拼接，无->进
			foreach ($result as $item) {
				
				$tmp = $item;
				
				$tmp[] = $num;
				
				if (!in_array($tmp, $result)) {
					
					$result[] = $tmp;
				}
			}
		}
		
		return $result;
	}
	
	
	// var_dump(subsetsWithDup([1, 2, 2, 3]));
	var_dump(subsetsWithDup([1, 2, 3]));
	
