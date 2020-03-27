<?php
	/**
	 * Created by IntelliJ IDEA.
	 * User: 123
	 * Date: 2020/3/27
	 * Time: 11:13
	 */
	
	
	function plusOne($digits) {
		
		$l = count($digits);
		
		for($i = $l-1 ; $i>=0; $i--){
			
			$digits[$i]++;
			
			$digits[$i] = ($digits[$i] % 10);
			
			if($digits[$i] != 0) { return $digits;}
		}
		
		array_unshift($digits, 1);
		
		return $digits;
	}
	
	var_dump([1, 2, 3, 4]);
	var_dump(plusOne([1, 2, 3, 4]));
	
	echo '';
	
	var_dump([9, 9, 9, 9]);
	var_dump(plusOne([9, 9, 9, 9]));