<?php
	
	namespace daily;
	
	/**
	 * 88. 合并两个有序数组
	 * 
	 * 给你两个有序整数数组 nums1 和 nums2，请你将 nums2 合并到 nums1 中，使 nums1 成为一个有序数组。
	 *
	 * 初始化 nums1 和 nums2 的元素数量分别为 m 和 n 。你可以假设 nums1 的空间大小等于 m + n，这样它就有足够的空间保存来自 nums2 的元素。
	 *
	 *
	 *
	 * 示例 1：
	 *
	 * 输入：nums1 = [1,2,3,0,0,0], m = 3, nums2 = [2,5,6], n = 3
	 * 输出：[1,2,2,3,5,6]
	 * 示例 2：
	 *
	 * 输入：nums1 = [1], m = 1, nums2 = [], n = 0
	 * 输出：[1]
	 *
	 *
	 * 提示：
	 *
	 * nums1.length == m + n
	 * nums2.length == n
	 * 0 <= m, n <= 200
	 * 1 <= m + n <= 200
	 * -109 <= nums1[i], nums2[i] <= 109
	 */
	
	/**
	 * Class Merge
	 *
	 * @package src.daily
	 *
	 */
	class Merge{
		
		public function merge(&$nums1, $m, $nums2, $n){
			
			$nums1 = array_merge(array_slice($nums1, 0, $m), array_slice($nums2, 0, $n));
			
			sort($nums1);
			
			return $nums1;
		}
	}
	
	$nums1 = [-1, 0, 0, 3, 3, 3, 0, 0, 0];
	
	$m = 6;
	
	$nums2 = [1, 2, 2];
	
	$n = 3;
	
	var_dump((new Merge())->merge($nums1, $m, $nums2, $n));
