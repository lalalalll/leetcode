<?php
	
	namespace daily;
	
	/**
	 * 263. 丑数
	 * 给你一个整数 n ，请你判断 n 是否为 丑数 。如果是，返回 true ；否则，返回 false 。
	 *
	 * 丑数 就是只包含质因数 2、3 和/或 5 的正整数。
	 *
	 *
	 *
	 * 示例 1：
	 *
	 * 输入：n = 6
	 * 输出：true
	 * 解释：6 = 2 × 3
	 * 示例 2：
	 *
	 * 输入：n = 8
	 * 输出：true
	 * 解释：8 = 2 × 2 × 2
	 * 示例 3：
	 *
	 * 输入：n = 14
	 * 输出：false
	 * 解释：14 不是丑数，因为它包含了另外一个质因数 7 。
	 * 示例 4：
	 *
	 * 输入：n = 1
	 * 输出：true
	 * 解释：1 通常被视为丑数。
	 *
	 *
	 * 提示：
	 *
	 * -231 <= n <= 231 - 1
	 *
	 */
	
	/**
	 * Class IsUgly
	 *
	 * @package src.daily
	 *
	 */
	class IsUgly{
		
		public function isUgly($n){
			
			if ($n < 1) {
				
				return false;
			}
			
			while ($n % 5 == 0) {
				
				$n /= 5;
			}
			
			while ($n % 3 == 0) {
				
				$n /= 3;
			}
			
			while ($n % 2 == 0) {
				
				$n /= 2;
			}
			
			return $n == 1;
		}
		
		
		public function isUgly2($n){
			
			if ($n < 1) {
				
				return false;
			}
			
			$arr = [2, 3, 5];
			
			$count = count($arr);
			
			for ($i = 0; $i < $count; $i++) {
				
				while ($n % $arr[$i] == 0) {
					
					$n /= $arr[$i];
				}
			}
			
			return $n == 1;
		}
	}
	
	
	echo json_encode((new IsUgly())->isUgly2(9));
