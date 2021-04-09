<?php
	
	namespace daily;
	
	/**
	 * 1143. 最长公共子序列
	 * 给定两个字符串 text1 和 text2，返回这两个字符串的最长 公共子序列 的长度。如果不存在 公共子序列 ，返回 0 。
	 *
	 * 一个字符串的 子序列 是指这样一个新的字符串：它是由原字符串在不改变字符的相对顺序的情况下删除某些字符（也可以不删除任何字符）后组成的新字符串。
	 *
	 * 例如，"ace" 是 "abcde" 的子序列，但 "aec" 不是 "abcde" 的子序列。
	 * 两个字符串的 公共子序列 是这两个字符串所共同拥有的子序列。
	 *
	 *
	 *
	 * 示例 1：
	 *
	 * 输入：text1 = "abcde", text2 = "ace"
	 * 输出：3
	 * 解释：最长公共子序列是 "ace" ，它的长度为 3 。
	 * 示例 2：
	 *
	 * 输入：text1 = "abc", text2 = "abc"
	 * 输出：3
	 * 解释：最长公共子序列是 "abc" ，它的长度为 3 。
	 * 示例 3：
	 *
	 * 输入：text1 = "abc", text2 = "def"
	 * 输出：0
	 * 解释：两个字符串没有公共子序列，返回 0 。
	 *
	 *
	 * 提示：
	 *
	 * 1 <= text1.length, text2.length <= 1000
	 * text1 和 text2 仅由小写英文字符组成。
	 */
	
	/**
	 * Class LongestCommonSubsequence
	 *
	 * @package daily
	 *
	 */
	class LongestCommonSubsequence{
		
		function longestCommonSubsequence($text1, $text2){
			
			$length1 = strlen($text1);
			
			$length2 = strlen($text2);
			
			// $length1 * $length2 的空二维数组
			$arr = array_fill(0, $length1, array_fill(0, $length2, 0));
			
		}
		
		
		function longestCommonSubsequence2($text1, $text2){
			
			$m = strlen($text1);
			
			$n = strlen($text2);
			
			$dp = array_fill(0, $n, array_fill(0, $m, 0));
			
			for ($i = 1; $i <= $m; $i++) {
				
				for ($j = 1; $j <= $n; $j++) {
					
					if ($text1[$i - 1] == $text2[$j - 1]) {
						
						$dp[$i][$j] = $dp[$i - 1][$j - 1] + 1;
						
					}else {
						
						$dp[$i][$j] = max($dp[$i - 1][$j], $dp[$i][$j - 1]);
					}
				}
			}
			
			return intval($dp[$m][$n]);
		}
		
		
		function longestCommonSubsequence3($str1, $str2){
			
			$n = strlen($str1);
			
			$m = strlen($str2);
			
			$dp = array_fill(0, $m + 1, 0);
			
			// for ($i = 0; $i < $m + 1; $i++) {
			//
			// 	$dp[] = 0;
			// }
			
			for ($i = 1; $i < $n + 1; $i++) {
				
				$pre = 0;
				
				for ($j = 1; $j < $m + 1; $j++) {
					
					$temp = $dp[$j];
					
					if ($str1[$i - 1] == $str2[$j - 1]) {
						
						$dp[$j] = $pre + 1;
						
					}else {
						
						$dp[$j] = max($dp[$j - 1], $dp[$j]);
					}
					
					$pre = $temp;
				}
			}
			
			return $dp[count($dp) - 1];
		}
	}
	
	// $result = (new LongestCommonSubsequence())->longestCommonSubsequence2('abcde', 'abcde');
	$result = (new LongestCommonSubsequence())->longestCommonSubsequence3('abcde', 'a');
	
	var_dump($result);
